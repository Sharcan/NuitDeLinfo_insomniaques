<?php

namespace App\Controller;

use App\Repository\CarboneImpactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CarboneController extends AbstractController
{
    /**
     * @Route("/api/carbone", name="carbone")
     */
    public function index(CarboneImpactRepository $carbonRepository): Response
    {
        $request = Request::createFromGlobals();
        $apiKey = $request->headers->get('x-api-key');

        if($apiKey == $this->getParameter('api_key')) {
            $content = $request->toArray();
            if($content && !empty($content)) {
                $carboneRate = 0;
                foreach($content as $name) {
                    $carboneImpact = $carbonRepository->findOneBy(['name' => $name]);
                    if($carboneImpact) {
                        $carboneRate += $carboneImpact->getScore();
                    }
                }
                $response['status'] = 200;
                $response['message'] = 'OK';
                $response['result'] = $carboneRate;
            } else {
                $response['status'] = 404;
                $response['message'] = 'Body not found';
            }
        } else {
            $response['status'] = 404;
            $response['message'] = 'Api key not found';
        }
        
        $jsonResponse = new Response();
        $jsonResponse->headers->set('Content-Type', 'application/json');
        $jsonResponse->setContent(json_encode($response));
        return $jsonResponse;
    }
}
