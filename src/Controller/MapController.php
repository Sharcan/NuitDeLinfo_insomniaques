<?php

namespace App\Controller;

use App\Repository\UserAnswerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapController extends AbstractController
{
    /**
     * @Route("/api/map", name="map")
     */
    public function index(UserAnswerRepository $userAnswerRepository): Response
    {
        $userAnswers = $userAnswerRepository->findAll();
        $spots = [];
        if($userAnswers && !empty($userAnswers)) {
            foreach($userAnswers as $answer) {
                $city = $answer->getSpot();
                $latlon = $answer->getGeolocation();
                $latlon = explode(',', $latlon);
                $spots[] = $latlon;
            }
        }

        $jsonResponse = new Response();
        $jsonResponse->headers->set('Content-Type', 'application/json');
        $jsonResponse->setContent(json_encode($spots));
        return $jsonResponse;
    }
}
