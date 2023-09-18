<?php
/* 



//////////////////

Fixture Abandonnée

////////////////


namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Vehicules;
use App\Entity\InfoVehicules;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class VehiculeFixtures extends Fixture
{
    private $parameterBag;

    public function __construct(ParameterBagInterface $parameterBag, Filesystem $filesystem)
    {
        $this->parameterBag = $parameterBag;
        $this->filesystem = $filesystem;
    }
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

        // Créer le dossier
        $vehiculeId = $voiture->getId();
        $uploadPath = $this->parameterBag->get('kernel.project_dir') . '/public/images/' . $vehiculeId;
        $this->filesystem->mkdir($uploadPath);

        // Prendre image template par defaut
        $sourceImagePath = $this->parameterBag->get('kernel.project_dir') . '/public/images/Vehicules/defaut.jpg';
        $destinationImagePath = $uploadPath . '/defaut.jpg';
        $this->filesystem->copy($sourceImagePath, $destinationImagePath);

        // Renommer pour Correspondre aux demandes de l'affichage
        $nouveauNomImage = $vehiculeId;
        $nouveauPathImage = $uploadPath . '/' . $nouveauNomImage;
        $this->filesystem->rename($destinationImagePath, $nouveauPathImage);
        
        $manager->persist($voiture);
        $manager->persist($infoV);

        ////////////////////////////////////////////////////

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
        
        // Créer le dossier
        $vehiculeId = $voiture2->getId();
        $uploadPath = $this->parameterBag->get('kernel.project_dir') . '/public/images/' . $vehiculeId;
        $this->filesystem->mkdir($uploadPath);

        // Prendre image template par defaut
        $sourceImagePath = $this->parameterBag->get('kernel.project_dir') . '/public/images/Vehicules/defaut.jpg';
        $destinationImagePath = $uploadPath . '/defaut.jpg';
        $this->filesystem->copy($sourceImagePath, $destinationImagePath);

        // Renommer pour Correspondre aux demandes de l'affichage
        $nouveauNomImage = $vehiculeId;
        $nouveauPathImage = $uploadPath . '/' . $nouveauNomImage;
        $this->filesystem->rename($destinationImagePath, $nouveauPathImage);
        
        $manager->persist($voiture2);
        $manager->persist($infoV2);

        /////////////////////////////////////////////////

        $voiture3 = new Vehicules();
        $voiture3->setMarque('BMW');
        $voiture3->setModele('E.36');
        $voiture3->setChevaux(180);
        $voiture3->setAnnee($dateT);
        $voiture3->setKilometres(143000);
        $voiture3->setTypeCarburant('Essence');
        $voiture3->setDateAjout($dateT);
        $voiture3->setPrix(10989);

        $infoV3 = new InfoVehicules();
        $infoV3->setNbPortes(3);
        $infoV3->setNbSieges(5);
        $infoV3->setAbs(true);
        $infoV3->setRoueMotrices(2);
        $infoV3->setDirAssistee(true);
        $infoV3->setEsp(true);
        $infoV3->setAbAv(true);
        $infoV3->setAbAr(true);
        $infoV3->setWifi(false);
        $infoV3->setBluetooth(true);
        $infoV3->setRegVitesse(true);
        $infoV3->setLimVitesse(true);
        $infoV3->setCorrecTraj(true);
        $infoV3->setAideParking(true);
        $infoV3->setPropTrac('Propulsion');
        $infoV3->setAvisVendeur('Trés bon véhicule. Une bonne occasion. Révisions OK');

        $voiture3->setInfoData($infoV3);

        
        // Créer le dossier
        $vehiculeId = $voiture3->getId();
        $uploadPath = $this->parameterBag->get('kernel.project_dir') . '/public/images/' . $vehiculeId;
        $this->filesystem->mkdir($uploadPath);

        // Prendre image template par defaut
        $sourceImagePath = $this->parameterBag->get('kernel.project_dir') . '/public/images/Vehicules/defaut.jpg';
        $destinationImagePath = $uploadPath . '/defaut.jpg';
        $this->filesystem->copy($sourceImagePath, $destinationImagePath);

        // Renommer pour Correspondre aux demandes de l'affichage
        $nouveauNomImage = $vehiculeId;
        $nouveauPathImage = $uploadPath . '/' . $nouveauNomImage;
        $this->filesystem->rename($destinationImagePath, $nouveauPathImage);

        $manager->persist($voiture3);
        $manager->persist($infoV3);

        //////////////////////////////////////////////////

        $voiture4 = new Vehicules();
        $voiture4->setMarque('Nissan');
        $voiture4->setModele('Note');
        $voiture4->setChevaux(90);
        $voiture4->setAnnee($dateT);
        $voiture4->setKilometres(250000);
        $voiture4->setTypeCarburant('Diesel');
        $voiture4->setDateAjout($dateT);
        $voiture4->setPrix(5999);

        $infoV4 = new InfoVehicules();
        $infoV4->setNbPortes(5);
        $infoV4->setNbSieges(5);
        $infoV4->setAbs(true);
        $infoV4->setRoueMotrices(2);
        $infoV4->setDirAssistee(true);
        $infoV4->setEsp(true);
        $infoV4->setAbAv(true);
        $infoV4->setAbAr(true);
        $infoV4->setWifi(false);
        $infoV4->setBluetooth(true);
        $infoV4->setRegVitesse(false);
        $infoV4->setLimVitesse(false);
        $infoV4->setCorrecTraj(true);
        $infoV4->setAideParking(false);
        $infoV4->setPropTrac('Traction');
        $infoV4->setAvisVendeur('Trés bon véhicule. Une bonne occasion');

        $voiture4->setInfoData($infoV4);

        
        // Créer le dossier
        $vehiculeId = $voiture4->getId();
        $uploadPath = $this->parameterBag->get('kernel.project_dir') . '/public/images/' . $vehiculeId;
        $this->filesystem->mkdir($uploadPath);

        // Prendre image template par defaut
        $sourceImagePath = $this->parameterBag->get('kernel.project_dir') . '/public/images/Vehicules/defaut.jpg';
        $destinationImagePath = $uploadPath . '/defaut.jpg';
        $this->filesystem->copy($sourceImagePath, $destinationImagePath);

        // Renommer pour Correspondre aux demandes de l'affichage
        $nouveauNomImage = $vehiculeId;
        $nouveauPathImage = $uploadPath . '/' . $nouveauNomImage;
        $this->filesystem->rename($destinationImagePath, $nouveauPathImage);

        $manager->persist($voiture4);
        $manager->persist($infoV4);

        //////////////////////////////////////////////

        $voiture5 = new Vehicules();
        $voiture5->setMarque('Ford');
        $voiture5->setModele('Mustang');
        $voiture5->setChevaux(250);
        $voiture5->setAnnee($dateT);
        $voiture5->setKilometres(50000);
        $voiture5->setTypeCarburant('Diesel');
        $voiture5->setDateAjout($dateT);
        $voiture5->setPrix(25999);

        $infoV5 = new InfoVehicules();
        $infoV5->setNbPortes(3);
        $infoV5->setNbSieges(5);
        $infoV5->setAbs(true);
        $infoV5->setRoueMotrices(2);
        $infoV5->setDirAssistee(false);
        $infoV5->setEsp(true);
        $infoV5->setAbAv(true);
        $infoV5->setAbAr(true);
        $infoV5->setWifi(false);
        $infoV5->setBluetooth(true);
        $infoV5->setRegVitesse(false);
        $infoV5->setLimVitesse(false);
        $infoV5->setCorrecTraj(true);
        $infoV5->setAideParking(false);
        $infoV5->setPropTrac('Traction');
        $infoV5->setAvisVendeur('Rare Occasion');

        $voiture5->setInfoData($infoV5);

        
        // Créer le dossier
        $vehiculeId = $voiture5->getId();
        $uploadPath = $this->parameterBag->get('kernel.project_dir') . '/public/images/' . $vehiculeId;
        $this->filesystem->mkdir($uploadPath);

        // Prendre image template par defaut
        $sourceImagePath = $this->parameterBag->get('kernel.project_dir') . '/public/images/Vehicules/defaut.jpg';
        $destinationImagePath = $uploadPath . '/defaut.jpg';
        $this->filesystem->copy($sourceImagePath, $destinationImagePath);

        // Renommer pour Correspondre aux demandes de l'affichage
        $nouveauNomImage = $vehiculeId;
        $nouveauPathImage = $uploadPath . '/' . $nouveauNomImage;
        $this->filesystem->rename($destinationImagePath, $nouveauPathImage);
        
        $manager->persist($voiture5);
        $manager->persist($infoV5);

        ///////////////////////////////////////////

        $voiture6 = new Vehicules();
        $voiture6->setMarque('Opel');
        $voiture6->setModele('Astra');
        $voiture6->setChevaux(110);
        $voiture6->setAnnee($dateT);
        $voiture6->setKilometres(120000);
        $voiture6->setTypeCarburant('Diesel');
        $voiture6->setDateAjout($dateT);
        $voiture6->setPrix(9999);

        $infoV6 = new InfoVehicules();
        $infoV6->setNbPortes(5);
        $infoV6->setNbSieges(5);
        $infoV6->setAbs(true);
        $infoV6->setRoueMotrices(2);
        $infoV6->setDirAssistee(true);
        $infoV6->setEsp(true);
        $infoV6->setAbAv(true);
        $infoV6->setAbAr(true);
        $infoV6->setWifi(false);
        $infoV6->setBluetooth(true);
        $infoV6->setRegVitesse(false);
        $infoV6->setLimVitesse(false);
        $infoV6->setCorrecTraj(true);
        $infoV6->setAideParking(false);
        $infoV6->setPropTrac('Traction');
        $infoV6->setAvisVendeur('Trés bon véhicule. Une bonne occasion');

        $voiture6->setInfoData($infoV6);

        
        // Créer le dossier
        $vehiculeId = $voiture6->getId();
        $uploadPath = $this->parameterBag->get('kernel.project_dir') . '/public/images/' . $vehiculeId;
        $this->filesystem->mkdir($uploadPath);

        // Prendre image template par defaut
        $sourceImagePath = $this->parameterBag->get('kernel.project_dir') . '/public/images/Vehicules/defaut.jpg';
        $destinationImagePath = $uploadPath . '/defaut.jpg';
        $this->filesystem->copy($sourceImagePath, $destinationImagePath);

        // Renommer pour Correspondre aux demandes de l'affichage
        $nouveauNomImage = $vehiculeId;
        $nouveauPathImage = $uploadPath . '/' . $nouveauNomImage;
        $this->filesystem->rename($destinationImagePath, $nouveauPathImage);
        
        $manager->persist($voiture6);
        $manager->persist($infoV6);

        $manager->flush();
    }
}


*/