<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }


    /**
     * @Route("/", name="home")
     */
    public function home(){

        return $this->render('default/home.html.twig');
    }

    /**
     * @Route("/cgu", name="cgu")
     */
    public function cgu(){

        return $this->render('default/cgu.html.twig');
    }


    /**
     * @Route("/mention-legales", name="mention-legales")
     */
    public function mentionlegales(){

        return $this->render('default/mentionlegales.html.twig');
    }
}
