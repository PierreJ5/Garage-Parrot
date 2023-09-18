<?php

namespace App\Controller\AdminController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;

class EditUsersController extends AbstractController
{
    #[Route('/admin/dashboard/edituser', name: 'app_edit_users')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dataUsers = $entityManager->getRepository(Utilisateur::class)->findAll();


        $filtre = [];
        foreach ($dataUsers as $user) {
            if (!in_array('ROLE_ADMIN', $user->getRoles())) {
                $filtre[] = $user;
            }
        }

        return $this->render('vuesadmin/edit_users/index.html.twig', [
            'dataUsers' => $filtre,
        ]);
    }


    #[Route('/admin/dashboard/editutilisateurs/delete/{id}', name: 'app_delete_user')]
    public function deleteUser(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
    // Récupérer l'utilisateur à supprimer 
    $user = $entityManager->getRepository(Utilisateur::class)->find($id);

    $entityManager->remove($user);
    $entityManager->flush();


    return $this->redirectToRoute('app_edit_users');
}
}

