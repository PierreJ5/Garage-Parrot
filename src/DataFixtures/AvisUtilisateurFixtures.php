<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\AvisUtilisateur;
use DateTime;

class AvisUtilisateurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
            // AVIS UTILISATEUR

        $dateAvis = new dateTime();

        $avis1 = new AvisUtilisateur();
        $avis1->setNom('Alice');
        $avis1->setEmail('aliceTest@test.com');
        $avis1->setCommentaire('Attente un peu longue, mais pour un résultat pareil, c\'est pardonné !');
        $avis1->setAffichage(true);
        $avis1->setDateAjout($dateAvis);
                
        $manager->persist($avis1);

        $avis2 = new AvisUtilisateur();
        $avis2->setNom('Jean');
        $avis2->setEmail('jeanTest@test.com');
        $avis2->setCommentaire('Personnel aimable et accueillants. Le travail est fait vite et bien. Je recommande.');
        $avis2->setAffichage(true);
        $avis2->setDateAjout($dateAvis);
                
        $manager->persist($avis2);

        $avis3 = new AvisUtilisateur();
        $avis3->setNom('Serge');
        $avis3->setEmail('sergeTest@test.com');
        $avis3->setCommentaire('Je suis passé début Janvier pour effectuer des changement de filtres. Le personnel est super agréable et ils s\'occupent bien de nos véhicules. Je repasserais !');
        $avis3->setAffichage(true);
        $avis3->setDateAjout($dateAvis);
                
        $manager->persist($avis3);

        $avis4 = new AvisUtilisateur();
        $avis4->setNom('Serge');
        $avis4->setEmail('sergeTest@test.com');
        $avis4->setCommentaire('MESSAGE DU VISITEUR NON ACCEPTÉ PAR LA MODÉRATION');
        $avis4->setAffichage(false);
        $avis4->setDateAjout($dateAvis);
                
        $manager->persist($avis4);
    
        $manager->flush();
    }
}

