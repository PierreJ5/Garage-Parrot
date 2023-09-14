<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\HorairesGarage;

class Horaires extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i = 0; $i < 7; $i++) { 
            $horaire[$i] = new HorairesGarage();
            $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

            $horaire[$i]->setJour($jours[$i]);

            if ($jours[$i] !== 'Samedi' && $jours[$i] !== 'Dimanche') {
                $horaire[$i]->setOuvAm('9');
                $horaire[$i]->setFerAm('12');
                $horaire[$i]->setOuvPm('14');
                $horaire[$i]->setFerPm('19');
                
            }
            $manager->persist($horaire[$i]);
        }


        $manager->flush();
    }
}

