<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GreetingController extends AbstractController
{
    #[Route('/greet/{name}', name: 'greeting')]
    public function greet(string $name = 'World'): Response
    {
        return $this->render('greeting/index.html.twig', [
            'name' => $name,
        ]);
    }
}
