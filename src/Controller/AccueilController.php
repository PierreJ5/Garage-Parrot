<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\HorairesGarage;
use App\Entity\ServicesPrincipaux;
use App\Entity\ServicesSecondaires;
use Doctrine\ORM\EntityManagerInterface;

// Affichage de la page d'accueil
class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $horaires = $entityManager->getRepository(HorairesGarage::class)->findAll();
        $servicesP = $entityManager->getRepository(ServicesPrincipaux::class)->findAll();
        $servicesS = $entityManager->getRepository(ServicesSecondaires::class)->findAll();


        return $this->render('accueil/index.html.twig', [
            'horaires' => $horaires,
            'services_P' => $servicesP,
            'services_S' => $servicesS,
        ]);
    }
}
