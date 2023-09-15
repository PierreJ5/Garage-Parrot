<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DataFiltresController extends AbstractController
{
    #[Route('/data/filtres', name: 'app_data_filtres')]
    public function filtresData(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $marque = $data['marque'];
        $modele = $data['modele'];
        $annee = $data['annee'];
        $carburant = $data['carburant'];
        $minPrix = $data['minPrix'];
        $maxPrix = $data['maxPrix'];


        // Trie A Effectuer


        $responseData = [
            'message' => 'Tout est OK'
        ];

        $response = new JsonResponse($responseData);
        return $response;
    }
}
