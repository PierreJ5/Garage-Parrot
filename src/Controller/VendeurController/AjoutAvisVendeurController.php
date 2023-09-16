<?php

namespace App\Controller\VendeurController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutAvisVendeurController extends AbstractController
{
    #[Route('/vendeur/dashboard/ajoutavis', name: 'app_ajout_avis')]
    public function index(): Response
    {
        return $this->render('vuesVendeur/ajout_avis_vendeur/index.html.twig', [
            'controller_name' => 'AjoutAvisVendeurController',
        ]);
    }
}
