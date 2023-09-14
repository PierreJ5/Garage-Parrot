<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\ServicesSecondaires;

class ServicesSFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sS = new ServicesSecondaires();
        $sS->setTitre('Entretien Climatisation');
        $manager->persist($sS);

        $sS1 = new ServicesSecondaires();
        $sS1->setTitre('Nettoyage après réparations du véhicule');
        $manager->persist($sS1);

        $sS2 = new ServicesSecondaires();
        $sS2->setTitre('Pression des pneus');
        $manager->persist($sS2);

        $manager->flush();
    }
}
