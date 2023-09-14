<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\ServicesPrincipaux;

class ServicesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $s = new ServicesPrincipaux();
        $s->setTitre('Vidange');
        $s->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
        $s->setPrix('90');
        $manager->persist($s);

        $s1 = new ServicesPrincipaux();
        $s1->setTitre('Depannage');
        $s1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
        $s1->setPrix('130');
        $manager->persist($s1);

        $s2 = new ServicesPrincipaux();
        $s2->setTitre('Changement pare-brise');
        $s2->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.');
        $s2->setPrix('110');
        $manager->persist($s2);

        $s3 = new ServicesPrincipaux();
        $s3->setTitre('Changement Pneus');
        $s3->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
        $s3->setPrix('90');
        $manager->persist($s3);

        $manager->flush();
    }
}
