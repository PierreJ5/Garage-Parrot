<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends AbstractController
{
    #[Route('/redirect', name: 'app_redirect')]
    public function index(): Response
    {
        // Check if the user is already authenticated and has a role
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_admin');
        } elseif ($this->isGranted('ROLE_MODERATEUR')) {
            return $this->redirectToRoute('app_modo');
        } elseif ($this->isGranted('ROLE_VENDEUR')) {
            return $this->redirectToRoute('app_vendeur');
        }else {
            return $this->redirectToRoute('app_accueil');
        }
    }
}