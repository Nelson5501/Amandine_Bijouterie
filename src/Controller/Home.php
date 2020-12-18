<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Home extends AbstractController
{
    /**
     * @Route("/", name="Home")
     */
    public function index(): Response
    {
        return $this->render('Acceuil/Home.twig', [
            'controller_name' => 'Home',
        ]);
    }
}
