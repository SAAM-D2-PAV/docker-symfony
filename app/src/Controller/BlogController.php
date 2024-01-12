<?php

namespace App\Controller;

use LDAP\Result;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/api', name: 'api')]
    public function api(): Response
    {
        return $this->json('Coucou');
    }
    #[
        Route('/redirect')
    ]
    public function toto()
    {
        $url = $this->generateUrl('app_blog', ['title' => 'bar'], UrlGeneratorInterface::ABSOLUTE_URL);

        return $this->redirectToRoute('app_blog');
    }
}
