<?php

namespace App\Controller\AdminController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditHorairesController extends AbstractController
{
    #[Route('/admin/dashboard/edithoraires', name: 'app_edit_horaires')]
    public function index(): Response
    {
        return $this->render('vuesadmin/edit_horaires/index.html.twig', [
            'controller_name' => 'EditHorairesController',
        ]);
    }
}
