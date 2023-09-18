<?php

namespace App\Controller\VendeurController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Vehicules;
use App\Repository\VehiculesRepository;
use App\Entity\InfoVehicules;
use App\Repository\InfoVehiculesRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use DateTime;


class NewVehiculeController extends AbstractController
{
    #[Route('/vendeur/dashboard/vehicule/new', name: 'app_vehicule_new')]
    public function index(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response {


        $vehicules = new Vehicules();
        $infoVehicules = new InfoVehicules();

        $form = $this->createFormBuilder()
            ->add('marque', TextType::class)
            ->add('modele', TextType::class)
            ->add('prix', TextType::class)
            ->add('chevaux', TextType::class)

            ->add('kilometres', TextType::class)
            ->add('typeCarburant', ChoiceType::class, [
                'choices' => [
                    'Diesel' => 'Diesel',
                    'Essence' => 'Essence',
                    'Éléctrique' => 'Éléctrique'
                ],
            ])
            ->add('annee', DateType::class, [
                'widget' => 'choice',
                'years' => range(date('Y') - 63, date('Y') + 1), 
            ])
           // ->add('dateAjout', DateType::class, [
           //     'widget' => 'choice',
           // ])

            ->add('nb_portes', ChoiceType::class, [
                'choices' => [
                    '3' => '3',
                    '5' => '5',
                ],
            ])
            ->add('nb_sieges', ChoiceType::class, [
                'choices' => [
                    '2' => '2',
                    '3' => '3',
                    '5' => '5',
                    '7' => '7',
                ],
            ])
            ->add('abs', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('roue_motrices', ChoiceType::class, [
                'choices' => [
                    '2' => '2',
                    '4' => '4',
                ],
            ])
            ->add('dir_assistee', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('esp', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('ab_av', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('ab_ar', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('wifi', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('bluetooth', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('reg_vitesse', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('lim_vitesse', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('correc_traj', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('aide_parking', ChoiceType::class, [
                'choices' => [
                    'Oui' => 'true',
                    'Non' => 'false',
                ],
            ])
            ->add('prop_trac', ChoiceType::class, [
                'choices' => [
                    'Propulsion' => 'Propulsion',
                    'Traction' => 'Traction',
                    '4RM' => '4RM'
                ],
            ])
            ->add('avis_vendeur', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Sauvegarder'])
            ->getForm();
            
            
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $formData = $form->getData();

                $dateActuel = new dateTime();
    
                $vehicules->setMarque($formData['marque']);
                $vehicules->setModele($formData['modele']);
                $vehicules->setChevaux($formData['chevaux']);
                $vehicules->setAnnee($formData['annee']);
                $vehicules->setDateAjout($dateActuel);
                $vehicules->setKilometres($formData['kilometres']);
                $vehicules->setTypeCarburant($formData['typeCarburant']);
                $vehicules->setPrix($formData['prix']);
                
                $infoVehicules->setNbPortes($formData['nb_portes']);
                $infoVehicules->setNbSieges($formData['nb_sieges']);
                $infoVehicules->setAbs($formData['abs']);
                $infoVehicules->setRoueMotrices($formData['roue_motrices']);
                $infoVehicules->setDirAssistee($formData['dir_assistee']);
                $infoVehicules->setEsp($formData['esp']);
                $infoVehicules->setAbAv($formData['ab_av']);
                $infoVehicules->setAbAr($formData['ab_ar']);
                $infoVehicules->setWifi($formData['wifi']);
                $infoVehicules->setBluetooth($formData['bluetooth']);
                $infoVehicules->setRegVitesse($formData['reg_vitesse']);
                $infoVehicules->setLimVitesse($formData['lim_vitesse']);
                $infoVehicules->setCorrecTraj($formData['correc_traj']);
                $infoVehicules->setAideParking($formData['aide_parking']);
                $infoVehicules->setPropTrac($formData['prop_trac']);
                $infoVehicules->setAvisVendeur($formData['avis_vendeur']);
    

                $vehicules->setInfoData($infoVehicules);
            
                $entityManager->persist($vehicules);
                $entityManager->flush();

                // Création des Fichiers
                $vehiculeId = $vehicules->getId();

                $uploadPath = $this->getParameter('kernel.project_dir') . '/public/images/' . $vehiculeId;
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath);
                }
                

                return $this->redirectToRoute('app_vehicule_new', [
                    'vehicule' => $vehicules,
                ]);
            };


        return $this->render('vuesVendeur/new_vehicule/index.html.twig', [
            'form' => $form,
        ]);
    }
}