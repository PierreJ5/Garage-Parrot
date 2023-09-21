<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Vehicules;
use App\Entity\InfoVehicules;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Filesystem\Filesystem;
use DateTime;

class VehiculesFixtures extends Fixture
{
    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    public function load(ObjectManager $manager)
    {
        // Créez vos données de véhicule ici en utilisant Vehicules::class
        
        
        
        $vehicules = new Vehicules();
        $dateActuel = new dateTime();
    
        $vehicules->setMarque('Renault');
        $vehicules->setModele('Mégane 1');
        $vehicules->setChevaux('130');
        $vehicules->setAnnee($dateActuel);
        $vehicules->setDateAjout($dateActuel);
        $vehicules->setKilometres('120000');
        $vehicules->setTypeCarburant('Diesel');
        $vehicules->setPrix('6999');
        
        $infoVehicules = new InfoVehicules();
        $infoVehicules->setNbPortes('3');
        $infoVehicules->setNbSieges('5');
        $infoVehicules->setAbs(true);
        $infoVehicules->setRoueMotrices('2');
        $infoVehicules->setDirAssistee(true);
        $infoVehicules->setEsp(true);
        $infoVehicules->setAbAv(true);
        $infoVehicules->setAbAr(true);
        $infoVehicules->setWifi(true);
        $infoVehicules->setBluetooth(true);
        $infoVehicules->setRegVitesse(true);
        $infoVehicules->setLimVitesse(true);
        $infoVehicules->setCorrecTraj(true);
        $infoVehicules->setAideParking(true);
        $infoVehicules->setPropTrac('Traction');
        $infoVehicules->setAvisVendeur('Super véhicule TEST');

        $vehicules->setInfoData($infoVehicules);
        
        $manager->persist($vehicules);


        //////////////////////////

        
        $manager->flush();


        // Créez des répertoires et stockez les images
        $vehiculeId = $vehicules->getId();
        $uploadPath = $this->params->get('kernel.project_dir') . '/public/images/' . $vehiculeId;
        
        
        
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath);
        }
        
        $imageFile = 'public/images/VehiculesTemplates/defaut.jpg';
        $targetPath = $uploadPath . '/' . basename($imageFile);
        
        // Copiez la photo dans le dossier de l'ID du véhicule
        copy($imageFile, $targetPath);
        
        // Renommez la photo avec l'ID du véhicule
        $newImageName = $vehiculeId . '.' . pathinfo($imageFile, PATHINFO_EXTENSION);
        $newImagePath = $uploadPath . '/' . $newImageName;
        rename($targetPath, $newImagePath);

    }
}
