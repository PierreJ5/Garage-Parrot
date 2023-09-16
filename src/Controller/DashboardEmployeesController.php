<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardEmployeesController extends AbstractController
{
    #[Route('/employes/dashboard', name: 'app_vendeur')]
    public function index(): Response
    {
        return $this->render('dashboard/dashboard_employees/index.html.twig', [
            'controller_name' => 'DashboardEmployeesController',
        ]);
    }
}
