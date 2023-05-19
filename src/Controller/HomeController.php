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
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 2,
                'nom' => 'Le palais Breton',
                'prix' => '95',
                'datedebut' => '13.01.2023',
                'datefin' => '08.04.2023',
                'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ],
            [
                'id' => 1,
               'nom' => 'Le palais Breton',
               'prix' => '95',
               'datedebut' => '13.01.2023',
               'datefin' => '08.04.2023',
               'image' => 'https://www.maisonapart.com/images/auto/640-480-c/20220311_173419_istock-471826199.jpg'
            ]
            
        ];

        return $this->render('home/index.html.twig', ['gites' => $gites]);
    }
}
