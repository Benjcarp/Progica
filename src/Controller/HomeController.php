<?php

namespace App\Controller;

use App\Form\FiltreType;
use App\Repository\GiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(GiteRepository $giteRepository,EntityManagerInterface $em, Request $request): Response
    {   
        $gites = $giteRepository->findAll();
        $filtreForm = $this->createForm(FiltreType::class);
        $filtreForm->handleRequest($request);
        $criteres = $filtreForm->getData();

        if ($filtreForm->isSubmitted()) {
           $giteFiltres = $giteRepository->findByCriteria($criteres);
        //    dd($giteFiltres);

            return $this->render('home/index.html.twig', ['gites' => $giteFiltres, 'filtre' => $filtreForm]);
        }

        return $this->render('home/index.html.twig', ['gites' => $gites, 'filtre' => $filtreForm]);
    }
}
