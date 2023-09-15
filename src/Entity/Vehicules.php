<?php

namespace App\Entity;

use App\Repository\VehiculesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehiculesRepository::class)]
class Vehicules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column]
    private ?int $chevaux = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $annee = null;

    #[ORM\Column]
    private ?int $kilometres = null;

    #[ORM\Column(length: 255)]
    private ?string $typeCarburant = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateAjout = null;

    #[ORM\OneToOne(mappedBy: 'id_vehicule', cascade: ['persist', 'remove'])]
    private ?InfoVehicules $infoData = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getChevaux(): ?int
    {
        return $this->chevaux;
    }

    public function setChevaux(int $chevaux): static
    {
        $this->chevaux = $chevaux;

        return $this;
    }

    public function getAnnee(): ?\DateTimeInterface
    {
        return $this->annee;
    }

    public function setAnnee(\DateTimeInterface $annee): static
    {
        $this->annee = $annee;

        return $this;
    }

    public function getKilometres(): ?int
    {
        return $this->kilometres;
    }

    public function setKilometres(int $kilometres): static
    {
        $this->kilometres = $kilometres;

        return $this;
    }

    public function getTypeCarburant(): ?string
    {
        return $this->typeCarburant;
    }

    public function setTypeCarburant(string $typeCarburant): static
    {
        $this->typeCarburant = $typeCarburant;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->dateAjout;
    }

    public function setDateAjout(\DateTimeInterface $dateAjout): static
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    public function getInfoData(): ?InfoVehicules
    {
        return $this->infoData;
    }

    public function setInfoData(InfoVehicules $infoData): static
    {
        // set the owning side of the relation if necessary
        if ($infoData->getIdVehicule() !== $this) {
            $infoData->setIdVehicule($this);
        }

        $this->infoData = $infoData;

        return $this;
    }
}
