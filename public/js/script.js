var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    accessToken: 'pk.eyJ1IjoiYW50b2luZWRyc2wiLCJhIjoiY2tpOWp0Z3VnMGc4NzJzdGd3dDN4aDA2YiJ9.CUh0ZUTQIoI_aHfilkJGvA',
    maxZoom: 18,
    tileSize: 512,
    zoomOffset: -1,
    id: 'mapbox/outdoors-v11'
}).addTo(map);

map.locate({setView: true, maxZoom: 16});

function onLocationFound(e) {
    var radius = e.accuracy;

    L.marker(e.latlng).addTo(map)
        .bindPopup("You are within " + radius + " meters from this point").openPopup();

    L.circle(e.latlng, radius).addTo(map);
}
map.on('locationfound', onLocationFound);

function onLocationError(e) {
    alert(e.message);
}
map.on('locationerror', onLocationError);

// XMLHttpRequest

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       response = JSON.parse(this.responseText);
       console.log(response);
       response.forEach(spot => {
            L.marker([spot[0], spot[1]]).addTo(map);
       });
    }
};
xhttp.open("GET", "http://127.0.0.1:8000/api/map", true);
xhttp.send();