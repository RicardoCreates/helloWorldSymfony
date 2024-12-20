<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GreetingController extends AbstractController
{
    #[Route('/Services', name: 'Services')]
    public function greet(): Response
    {
        return $this->render('Services/index.html.twig');
    }
}
