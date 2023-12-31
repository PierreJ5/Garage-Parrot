<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\HorairesGarage;
use App\Entity\Vehicules;
use Doctrine\ORM\EntityManagerInterface;

// Affichage de la page Galerie
class GalerieController extends AbstractController
{
    #[Route('/galerie', name: 'app_galerie')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $horaires = $entityManager->getRepository(HorairesGarage::class)->findAll();
        $vehicule_info = $entityManager->getRepository(Vehicules::class)->findAll();

        return $this->render('galerie/index.html.twig', [
            'horaires' => $horaires,
            'vehiculeInfo' => $vehicule_info,
        ]);
    }
}
