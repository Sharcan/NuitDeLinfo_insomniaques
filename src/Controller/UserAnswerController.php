<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserAnswer;
use App\Form\UserAnswerType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class UserAnswerController extends AbstractController
{
    /**
     * @Route("/user/answer/1", name="user_answer_1")
     */
    public function index(Request $request, UrlGeneratorInterface $urlGenerator): Response
    {
        $userAnswers = new UserAnswer();
        $form = $this->createForm(UserAnswerType::class, $userAnswers);

        $form
        ->remove('carbone_score')
        ->remove('cleanliness')
        ->remove('general')
        ->remove('transport')
        ->remove('solarcream')
        ->remove('cigarette')
        ->remove('plasticbag')
        ->remove('wave')
        ->remove('bathers')
        ->remove('nautic_activity')
        ->remove('boats')
        ->remove('surfers');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            setcookie('spot', $form->get('spot')->getData());
            setcookie('date_start', $form->get('date_start')->getData()->format('Y-m-d'));
            setcookie('duration', $form->get('duration')->getData());

            return new RedirectResponse($urlGenerator->generate('user_answer_2'));
        }

        return $this->render('user_answer/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/user/answer/2", name="user_answer_2")
     */
    public function index2(Request $request, UrlGeneratorInterface $urlGenerator): Response
    {
        $userAnswers = new UserAnswer();
        $form = $this->createForm(UserAnswerType::class, $userAnswers);

        $form
        ->remove('carbone_score')
        ->remove('spot')
        ->remove('date_start')
        ->remove('duration')
        ->remove('cleanliness')
        ->remove('transport')
        ->remove('solarcream')
        ->remove('cigarette')
        ->remove('plasticbag')
        ->remove('wave')
        ->remove('bathers')
        ->remove('nautic_activity')
        ->remove('boats')
        ->remove('surfers');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            setcookie('general', $form->get('general')->getData());

            return new RedirectResponse($urlGenerator->generate('user_answer_3'));
        }

        return $this->render('user_answer/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/user/answer/3", name="user_answer_3")
     */
    public function index3(Request $request, UrlGeneratorInterface $urlGenerator): Response
    {
        $userAnswers = new UserAnswer();
        $form = $this->createForm(UserAnswerType::class, $userAnswers);

        $form
        ->remove('carbone_score')
        ->remove('spot')
        ->remove('date_start')
        ->remove('duration')
        ->remove('general')
        ->remove('transport')
        ->remove('solarcream')
        ->remove('cigarette')
        ->remove('plasticbag')
        ->remove('wave')
        ->remove('bathers')
        ->remove('nautic_activity')
        ->remove('boats')
        ->remove('surfers');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            setcookie('cleanliness', $form->get('cleanliness')->getData());
            return new RedirectResponse($urlGenerator->generate('user_answer_4'));
        }

        return $this->render('user_answer/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    
    /**
     * @Route("/user/answer/4", name="user_answer_4")
     */
    public function index4(Request $request, UrlGeneratorInterface $urlGenerator): Response
    {
        $userAnswers = new UserAnswer();
        $form = $this->createForm(UserAnswerType::class, $userAnswers);

        $form
        ->remove('carbone_score')
        ->remove('spot')
        ->remove('date_start')
        ->remove('duration')
        ->remove('general')
        ->remove('cleanliness')
        ->remove('solarcream')
        ->remove('cigarette')
        ->remove('plasticbag')
        ->remove('wave')
        ->remove('bathers')
        ->remove('nautic_activity')
        ->remove('boats')
        ->remove('surfers');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            setcookie('transport', $form->get('transport')->getData());

            return new RedirectResponse($urlGenerator->generate('user_answer_5'));
        }

        return $this->render('user_answer/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    
    /**
     * @Route("/user/answer/5", name="user_answer_5")
     */
    public function index5(Request $request, UrlGeneratorInterface $urlGenerator): Response
    {
        $userAnswers = new UserAnswer();
        $form = $this->createForm(UserAnswerType::class, $userAnswers);

        $form
        ->remove('carbone_score')
        ->remove('spot')
        ->remove('date_start')
        ->remove('duration')
        ->remove('general')
        ->remove('cleanliness')
        ->remove('solarcream')
        ->remove('cigarette')
        ->remove('plasticbag')
        ->remove('wave')
        ->remove('transport');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            setcookie('boats', $form->get('boats')->getData());
            setcookie('surfers', $form->get('surfers')->getData());
            setcookie('bathers', $form->get('bathers')->getData());
            setcookie('nautic_activity', $form->get('nautic_activity')->getData());

            return new RedirectResponse($urlGenerator->generate('user_answer_6'));

        }

        return $this->render('user_answer/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/answer/6", name="user_answer_6")
     */
    public function index6(Request $request, UrlGeneratorInterface $urlGenerator): Response
    {
        $userAnswers = new UserAnswer();
        $form = $this->createForm(UserAnswerType::class, $userAnswers);

        $form
        ->remove('carbone_score')
        ->remove('spot')
        ->remove('date_start')
        ->remove('duration')
        ->remove('general')
        ->remove('cleanliness')
        ->remove('solarcream')
        ->remove('cigarette')
        ->remove('plasticbag')
        ->remove('transport')
        ->remove('bathers')
        ->remove('nautic_activity')
        ->remove('boats')
        ->remove('surfers');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            setcookie('wave', $form->get('wave')->getData());

            return new RedirectResponse($urlGenerator->generate('user_answer_7'));
        }

        return $this->render('user_answer/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/user/answer/7", name="user_answer_7")
     */
    public function index7(Request $request, UrlGeneratorInterface $urlGenerator): Response
    {
        $userAnswers = new UserAnswer();
        $form = $this->createForm(UserAnswerType::class, $userAnswers);

        $form
        ->remove('carbone_score')
        ->remove('spot')
        ->remove('date_start')
        ->remove('duration')
        ->remove('general')
        ->remove('cleanliness')
        ->remove('wave')
        ->remove('transport')
        ->remove('bathers')
        ->remove('nautic_activity')
        ->remove('boats')
        ->remove('surfers');

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            setcookie('solarcream', $form->get('solarcream')->getData());
            setcookie('cigarette', $form->get('cigarette')->getData());
            // setcookie('plasticbag', $form->get('plasticbag')->getData());

            $userAnswers = new UserAnswer();
            $userAnswers->setSpot($_COOKIE['spot']);
            // $userAnswers->setGeolocation($_COOKIE['geolocation']);
            $userAnswers->setDateStart(new DateTime($_COOKIE['date_start']));
            $userAnswers->setDuration($_COOKIE['duration']);
            $userAnswers->setCleanliness($_COOKIE['cleanliness']);
            $userAnswers->setGeneral($_COOKIE['general']);
            $userAnswers->setTransport($_COOKIE['transport']);
            $userAnswers->setSolarcream($_COOKIE['solarcream']);
            $userAnswers->setCigarette($_COOKIE['cigarette']);
            // $userAnswers->setPlasticbag($_COOKIE['plasticbag']);
            $userAnswers->setWave($_COOKIE['wave']);
            $userAnswers->setBathers($_COOKIE['bathers']);
            $userAnswers->setNauticActivity($_COOKIE['nautic_activity']);
            $userAnswers->setBoats($_COOKIE['boats']);
            $userAnswers->setSurfers($_COOKIE['surfers']);
            $userAnswers->setCreatedAt(new DateTime());
            // $userAnswers->setUserId(new User());
            

            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($userAnswers);
            // $entityManager->flush();
        }

        return $this->render('user_answer/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
