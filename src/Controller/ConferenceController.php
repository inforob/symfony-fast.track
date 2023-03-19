<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function index(): Response
    {
        $message =
    <<< EOF
<html><body><img src="/images/under-construction.jpg" /></body></html>
EOF;

        return new Response($message);
    }
}
