<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Vehicules;
use App\Entity\InfoVehicules;

class VehiculeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $voiture = new Vehicules();
        $voiture->setMarque('Opel');
        $voiture->setModele('Corsa');
        $voiture->setChevaux(120);
        $dateT = new \DateTime('2017-05-18');
        $voiture->setAnnee($dateT);
        $voiture->setKilometres(120000);
        $voiture->setTypeCarburant('Essence');
        $voiture->setDateAjout($dateT);
        $voiture->setPrix(12999);

        $infoV = new InfoVehicules();
        $infoV->setNbPortes(5);
        $infoV->setNbSieges(5);
        $infoV->setAbs(true);
        $infoV->setRoueMotrices(2);
        $infoV->setDirAssistee(true);
        $infoV->setEsp(true);
        $infoV->setAbAv(true);
        $infoV->setAbAr(true);
        $infoV->setWifi(false);
        $infoV->setBluetooth(true);
        $infoV->setRegVitesse(false);
        $infoV->setLimVitesse(false);
        $infoV->setCorrecTraj(true);
        $infoV->setAideParking(false);
        $infoV->setPropTrac('Traction');
        $infoV->setAvisVendeur('Trés bon véhicule. Une bonne occasion');

        $voiture->setInfoData($infoV);
        
        $manager->persist($voiture);
        $manager->persist($infoV);

        $voiture2 = new Vehicules();
        $voiture2->setMarque('Dacia');
        $voiture2->setModele('Sandero');
        $voiture2->setChevaux(140);
        $voiture2->setAnnee($dateT);
        $voiture2->setKilometres(155000);
        $voiture2->setTypeCarburant('Diesel');
        $voiture2->setDateAjout($dateT);
        $voiture2->setPrix(9989);

        $infoV2 = new InfoVehicules();
        $infoV2->setNbPortes(3);
        $infoV2->setNbSieges(5);
        $infoV2->setAbs(true);
        $infoV2->setRoueMotrices(2);
        $infoV2->setDirAssistee(true);
        $infoV2->setEsp(true);
        $infoV2->setAbAv(true);
        $infoV2->setAbAr(true);
        $infoV2->setWifi(false);
        $infoV2->setBluetooth(true);
        $infoV2->setRegVitesse(false);
        $infoV2->setLimVitesse(false);
        $infoV2->setCorrecTraj(true);
        $infoV2->setAideParking(false);
        $infoV2->setPropTrac('Traction');
        $infoV2->setAvisVendeur('Trés bon véhicule. Une bonne occasion. Révisions OK');

        $voiture2->setInfoData($infoV2);
        
        $manager->persist($voiture2);
        $manager->persist($infoV2);

        $manager->flush();
    }
}
