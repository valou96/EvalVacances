<?php

namespace App\Controller;

use App\Repository\DestinationRepository;
use App\Repository\ReviewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(DestinationRepository $destinationRepository): Response
    {



        return $this->render('accueil/index.html.twig', [
            'destinations' => $destinationRepository->findAll(),
        ]);
    }
}
