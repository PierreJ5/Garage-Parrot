<?php

namespace App\Controller\AdminController;

use App\Entity\HorairesGarage;
use App\Repository\HorairesGarageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class EditHorairesController extends AbstractController
{
    #[Route('/admin/dashboard/edithoraires', name: 'app_edit_horaires')]
    public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {

        $dataRequest = $entityManager->getRepository(HorairesGarage::class)->findAll();


        $task = new HorairesGarage();

        $form = $this->createFormBuilder($task)
            ->add('jour', ChoiceType::class, [
                'choices' => [
                    'Lundi' => 'lundi',
                    'Mardi' => 'mardi',
                    'Mercredi' => 'mercredi',
                    'Jeudi' => 'jeudi',
                    'Vendredi' => 'vendredi',
                    'Samedi' => 'samedi',
                    'Dimanche' => 'dimanche'
                ],
            ])
            ->add('ouv_am', TextType::class)
            ->add('fer_am', TextType::class)
            ->add('ouv_pm', TextType::class)
            ->add('fer_pm', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Sauvegarder'])
            ->getForm();

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                
                $task = $form->getData();
                $recherche = $task->getJour();

                $oldHoraires = $entityManager->getRepository(HorairesGarage::class)->findOneBy(['jour' => $recherche]);

                $oldHoraires->setOuvAm($task->getOuvAm());
                $oldHoraires->setFerAm($task->getFerAm());
                $oldHoraires->setOuvPm($task->getOuvPm());
                $oldHoraires->setFerPm($task->getFerPm());

                $entityManager->persist($oldHoraires);
                $entityManager->flush();

                $session->getFlashBag()->add('success', 'Mise à jour réussie.');
    

            }
        return $this->render('vuesadmin/edit_horaires/index.html.twig', [
            'form' => $form,
            'dataR' => $dataRequest,
        ]);
    }
}
