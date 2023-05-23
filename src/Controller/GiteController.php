<?php

namespace App\Controller;

use App\Entity\Gite;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GiteController extends AbstractController
{
    #[Route('/gite/{id}', name: 'show_gite')]
    public function show(EntityManagerInterface $em, int $id): Response
    {
        $gite = $em->getRepository(Gite::class)->find($id);
        return $this->render('gite/show.html.twig',['gite' => $gite]);
    }
}
