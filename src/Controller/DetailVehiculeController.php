<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Affichage de la page du véhicule séléctionné
class DetailVehiculeController extends AbstractController
{
    #[Route('/galerie/{id}', name: 'app_detail_vehicule')]
    public function index(): Response
    {
        return $this->render('detail_vehicule/index.html.twig', [
            'controller_name' => 'DetailVehiculeController',
        ]);
    }
}
