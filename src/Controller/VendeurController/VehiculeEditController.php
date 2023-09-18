<?php

namespace App\Controller\VendeurController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Vehicules;
use App\Repository\VehiculesRepository;


class VehiculeEditController extends AbstractController
{
    #[Route('/vendeur/dashboard/vehicule', name: 'app_vehicule_edit')]
    public function index(EntityManagerInterface $entityManager): Response {
        $vehicules = $entityManager->getRepository(Vehicules::class)->findAll();
    
        return $this->render('vuesVendeur/vehicule_edit/index.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }

    #[Route('/vendeur/dashboard/vehicule/delete/{id}', name: 'app_delete_vehicule')]
    public function deleteVehicule(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        // Récupérer le véhicule à supprimer 
        $vehicule = $entityManager->getRepository(Vehicules::class)->find($id);

        // SUpprimer le dossier Stockage Images
        $uploadPath = $this->getParameter('kernel.project_dir') . '/public/images/' . $vehicule->getId();
        if (file_exists($uploadPath)) {
            rmdir($uploadPath);
        }

        // Supprimer le Véhicule
        $entityManager->remove($vehicule);
        $entityManager->flush();


        return $this->redirectToRoute('app_vehicule_edit');
    }
}

