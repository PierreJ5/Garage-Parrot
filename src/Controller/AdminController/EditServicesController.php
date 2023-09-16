<?php

namespace App\Controller\AdminController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditServicesController extends AbstractController
{
    #[Route('/admin/dashboard/editservices', name: 'app_edit_services')]
    public function index(): Response
    {
        return $this->render('vuesadmin/edit_services/index.html.twig', [
            'controller_name' => 'EditServicesController',
        ]);
    }
}
