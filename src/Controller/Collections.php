<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Collections extends AbstractController
{
    /**
     * @Route("/collections", name="Collections")
     */
    public function index(): Response
    {
        return $this->render('Acceuil/Collections.twig', [
            'controller_name' => 'Collection',
        ]);
    }
}
