<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $gites = [
            [
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13/01/2023',
               'datefin' => '08/04/2023',
               'image' => 'https://www.gitesdefrance35.com/photos/gites35/G/photo33/gite-roz-landrieux-bretagne--ref--35G12036_440_791.jpg'
            ],
            [
                'nom' => 'Le palais Breton',
                'prix' => '95',
                'datedebut' => '13/01/2023',
                'datefin' => '08/04/2023',
                'image' => 'https://www.gitesdefrance35.com/photos/gites35/G/photo33/gite-roz-landrieux-bretagne--ref--35G12036_440_791.jpg'
            ]
        ];

        return $this->render('home/index.html.twig', ['gites' => $gites]);
    }
}
