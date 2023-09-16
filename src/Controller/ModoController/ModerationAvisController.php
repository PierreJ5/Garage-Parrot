<?php

namespace App\Controller\ModoController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModerationAvisController extends AbstractController
{
    #[Route('/moderateur/dashboard/avis', name: 'app_moderation_avis')]
    public function index(): Response
    {
        return $this->render('vuesmodo/moderation_avis/index.html.twig', [
            'controller_name' => 'ModerationAvisController',
        ]);
    }
}
