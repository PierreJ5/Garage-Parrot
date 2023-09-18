<?php

namespace App\Controller\VendeurController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Vehicules;


class VehiculeEditController extends AbstractController
{
    #[Route('/vendeur/dashboard/vehicule', name: 'app_vehicule_edit')]
    public function index(EntityManagerInterface $entityManager): Response {
        $vehicules = $entityManager->getRepository(Vehicules::class)->findAll();
    
        return $this->render('vuesVendeur/vehicule_edit/index.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }
}
