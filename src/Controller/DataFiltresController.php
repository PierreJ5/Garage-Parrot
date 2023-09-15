<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Vehicules;
use App\Repository\VehiculesRepository;


class DataFiltresController extends AbstractController
{
    #[Route('/data/filtres', name: 'app_data_filtres')]
    public function filtresData(VehiculesRepository $vehiculesRepository, Request $request)
    {
        $data = json_decode($request->getContent(), true);

        // Récéption des données pour le trie

        $marque = $data['marque'];
        $modele = $data['modele'];
        $annee = $data['annee'];
        $carburant = $data['carburant'];
        $minPrix = $data['minPrix'];
        $maxPrix = $data['maxPrix'];
        print_r($data);


        // Trie A Effectuer

        $criteres = [];

        if ($marque !== 'null') {
            $criteres['marque'] = $marque;
        }
        if ($modele !== 'null') {
            $criteres['modele'] = $modele;
        }
        if ($annee !== 'null') {
            $criteres['annee'] = $annee;
        }
        if ($carburant !== 'null') {
            $criteres['typeCarburant'] = $carburant;
        }

        

        $vehicules = $vehiculesRepository->findBy($criteres);

        $jsonVehicule = [];
        foreach ($vehicules as $ve) {
            $jsonVehicule[] = [
                'id' => $ve->getId(),
                'marque' => $ve->getMarque(),
            ];
        }



        //Envoi de la Réponse

        $response = new JsonResponse($jsonVehicule);
        return $response;
    }
}
