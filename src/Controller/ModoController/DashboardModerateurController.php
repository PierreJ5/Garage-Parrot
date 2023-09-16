<?php

namespace App\Controller\ModoController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardModerateurController extends AbstractController
{
    #[Route('/moderateur/dashboard', name: 'app_modo')]
    public function index(): Response
    {
        return $this->render('dashboard/dashboard_moderateur/index.html.twig', [
            'controller_name' => 'DashboardModerateurController',
        ]);
    }
}
