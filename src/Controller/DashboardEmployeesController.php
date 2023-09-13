<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardEmployeesController extends AbstractController
{
    #[Route('/employes/dashboard', name: 'app_dashboard_employees')]
    public function index(): Response
    {
        return $this->render('dashboard_employees/index.html.twig', [
            'controller_name' => 'DashboardEmployeesController',
        ]);
    }
}
