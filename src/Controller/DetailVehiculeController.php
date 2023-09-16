<?php

namespace App\Controller;

use App\Entity\Vehicules;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Affichage de la page du véhicule séléctionné
class DetailVehiculeController extends AbstractController
{
    #[Route('/galerie/{id}', name: 'galerie_show_id')]
    public function show(EntityManagerInterface $entityManager, int $id): Response
    {
        $vehicule = $entityManager->getRepository(Vehicules::class)->find($id);

        if (!$vehicule) {
            throw $this->createNotFoundException(
                'No vehicule found for id '.$id
            );
        }

         return $this->render('detail_vehicule/index.html.twig', ['vehicule' => $vehicule]);
    }
}
