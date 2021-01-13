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

        return $this->render('front/default/home.html.twig');
    }

    /**
     * @Route("/cgu", name="cgu")
     */
    public function cgu(){

        return $this->render('front/default/cgu.html.twig');
    }


    /**
     * @Route("/mentions-legales", name="mentions-legales")
     */
    public function mentionsLegales(){

        return $this->render('front/default/mentionslegales.html.twig');
    }
}
