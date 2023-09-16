<?php

namespace App\Controller\AdminController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditUsersController extends AbstractController
{
    #[Route('/admin/dashboard/editutilisateurs', name: 'app_edit_users')]
    public function index(): Response
    {
        return $this->render('vuesadmin/edit_users/index.html.twig', [
            'controller_name' => 'EditUsersController',
        ]);
    }
}
