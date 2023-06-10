<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController
{
    #[Route('/')]
    public function index(Request $request): Response
    {
        return view
    }
    #[Route('/sobre')]
    public function about(): Response
    {
        return New Response('sobre mim');
    }
}