<?php
namespace App\Controller\Api;

use App\Services\AppService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(("/api"))]
class ApiController extends AbstractController
{
    public function __construct(
        private readonly AppService $appService
    ) {}
    
    #[Route('/brands')]
    public function brands(Request $request): JsonResponse
    {
        $brands = $this->appService->getBrands();

        return new JsonResponse($brands);
    }
    #[Route('/models')]
    public function models(Request $request): JsonResponse
    {
        $brands = $this->appService->getBrands();

        return new JsonResponse($brands);
    }
    #[Route('/d')]
    public function versions(Request $request): JsonResponse
    {
        $brands = $this->appService->getBrands();

        return new JsonResponse($brands);
    }
    #[Route('/r')]
    public function infos(Request $request): JsonResponse
    {
        $brands = $this->appService->getBrands();

        return new JsonResponse($brands);
    }
}