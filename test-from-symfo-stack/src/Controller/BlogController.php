<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): JsonResponse
    {
        $blogPosts = [
            [
                'title' => 'My first blog post',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel'
            ],
            [
                'title' => 'My second blog post',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel'
            ],
            [
                'title' => 'My third blog post',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel'
            ],
        ];

        return $this->json($blogPosts);
    }
}
