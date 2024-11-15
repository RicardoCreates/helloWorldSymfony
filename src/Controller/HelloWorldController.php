<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    #[Route('/hello', name: 'hello_world')]
    public function index(): Response
    {
        return new Response('<html><body><h1>Hello, World!</h1></body></html>');
    }
}
