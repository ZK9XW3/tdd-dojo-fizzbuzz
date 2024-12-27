<?php

declare(strict_types=1);

namespace App\Controller;

use App\Manager\FizzBuzzManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class FizzBuzzController extends AbstractController
{
    public function __construct(private readonly FizzBuzzManager $manager)
    {
    }

    #[Route('/fizzbuzz', name: 'fizzbuzz', methods: ['GET'])]
    public function __invoke(): JsonResponse
    {
        return $this->json($this->manager->execute());
    }

}