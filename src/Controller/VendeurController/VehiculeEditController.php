<?php

namespace App\Controller\VendeurController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiculeEditController extends AbstractController
{
    #[Route('/vendeur/dashboard/vehicule', name: 'app_vehicule_edit')]
    public function index(): Response
    {
        return $this->render('vuesVendeur/vehicule_edit/index.html.twig', [
            'controller_name' => 'VehiculeEditController',
        ]);
    }
}
