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
        $minPrix = ($data['minPrix']);
        $maxPrix = ($data['maxPrix']);
        $criteres = [];

        // Trie A Effectuer

        $conditions = [
            'marque' => $marque,
            'modele' => $modele,
            'typeCarburant' => $carburant,
        ];
        
        foreach ($conditions as $colonne => $valeur) {
            if ($valeur !== 'null') {
                $criteres[$colonne] = $valeur;
            }
        }
        
        $vehicules = $vehiculesRepository->findBy($criteres);


        foreach ($vehicules as $ve => $id) {
            $ids[] = $id;
        }
        if ($minPrix >= 1 || $maxPrix != "") {
            if ($maxPrix == "") {
                $maxPrix = 80000;
            }
            $vehicules = $vehiculesRepository->findItemsByPrice($minPrix, $maxPrix, $ids);
        }
        // Génération de la Réponse Json

        $jsonVehicule = [];
        foreach ($vehicules as $ve) {
            $jsonVehicule[] = [
                'id' => $ve->getId(),
                'marque' => $ve->getMarque(),
                'modele' => $ve->getModele(),
                'chevaux' => $ve->getChevaux(), 
                'carburant' => $ve->getTypeCarburant(),
                'kilometres' => $ve->getKilometres(),
                'annee' => $ve->getAnnee()->format('Y-m'),
            ];
        }



        //Envoi de la Réponse

        $response = new JsonResponse($jsonVehicule);
        return $response;
    }
}
