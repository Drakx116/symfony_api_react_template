<?php

namespace App\Controller\API;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 *
 * @package App\Controller\API
 */
class AliveController
{
    /**
     * @Route("/", name="api_default", methods={"GET"})
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return new JsonResponse([
           'status' => 200,
           'message' => 'API is alive.'
        ]);
    }
}
