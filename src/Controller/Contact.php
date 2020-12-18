<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Contact extends AbstractController
{
    /**
     * @Route("/contact", name="Contact")
     */
    public function index(): Response
    {
        return $this->render('Acceuil/Contact.twig', [
            'controller_name' => 'Contact',
        ]);
    }
}
