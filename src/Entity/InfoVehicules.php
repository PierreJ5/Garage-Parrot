<?php

namespace App\Entity;

use App\Repository\InfoVehiculesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoVehiculesRepository::class)]
class InfoVehicules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'infoData', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vehicules $id_vehicule = null;

    #[ORM\Column]
    private ?int $nb_portes = null;

    #[ORM\Column]
    private ?int $nb_sieges = null;

    #[ORM\Column]
    private ?bool $abs = null;

    #[ORM\Column]
    private ?int $roue_motrices = null;

    #[ORM\Column]
    private ?bool $dir_assistee = null;

    #[ORM\Column]
    private ?bool $esp = null;

    #[ORM\Column]
    private ?bool $ab_av = null;

    #[ORM\Column]
    private ?bool $ab_ar = null;

    #[ORM\Column]
    private ?bool $wifi = null;

    #[ORM\Column]
    private ?bool $bluetooth = null;

    #[ORM\Column]
    private ?bool $reg_vitesse = null;

    #[ORM\Column]
    private ?bool $lim_vitesse = null;

    #[ORM\Column]
    private ?bool $correc_traj = null;

    #[ORM\Column]
    private ?bool $aide_parking = null;

    #[ORM\Column(length: 255)]
    private ?string $prop_trac = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $avis_vendeur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVehicule(): ?Vehicules
    {
        return $this->id_vehicule;
    }

    public function setIdVehicule(Vehicules $id_vehicule): static
    {
        $this->id_vehicule = $id_vehicule;

        return $this;
    }

    public function getNbPortes(): ?int
    {
        return $this->nb_portes;
    }

    public function setNbPortes(int $nb_portes): static
    {
        $this->nb_portes = $nb_portes;

        return $this;
    }

    public function getNbSieges(): ?int
    {
        return $this->nb_sieges;
    }

    public function setNbSieges(int $nb_sieges): static
    {
        $this->nb_sieges = $nb_sieges;

        return $this;
    }

    public function isAbs(): ?bool
    {
        return $this->abs;
    }

    public function setAbs(bool $abs): static
    {
        $this->abs = $abs;

        return $this;
    }

    public function getRoueMotrices(): ?int
    {
        return $this->roue_motrices;
    }

    public function setRoueMotrices(int $roue_motrices): static
    {
        $this->roue_motrices = $roue_motrices;

        return $this;
    }

    public function isDirAssistee(): ?bool
    {
        return $this->dir_assistee;
    }

    public function setDirAssistee(bool $dir_assistee): static
    {
        $this->dir_assistee = $dir_assistee;

        return $this;
    }

    public function isEsp(): ?bool
    {
        return $this->esp;
    }

    public function setEsp(bool $esp): static
    {
        $this->esp = $esp;

        return $this;
    }

    public function isAbAv(): ?bool
    {
        return $this->ab_av;
    }

    public function setAbAv(bool $ab_av): static
    {
        $this->ab_av = $ab_av;

        return $this;
    }

    public function isAbAr(): ?bool
    {
        return $this->ab_ar;
    }

    public function setAbAr(bool $ab_ar): static
    {
        $this->ab_ar = $ab_ar;

        return $this;
    }

    public function isWifi(): ?bool
    {
        return $this->wifi;
    }

    public function setWifi(bool $wifi): static
    {
        $this->wifi = $wifi;

        return $this;
    }

    public function isBluetooth(): ?bool
    {
        return $this->bluetooth;
    }

    public function setBluetooth(bool $bluetooth): static
    {
        $this->bluetooth = $bluetooth;

        return $this;
    }

    public function isRegVitesse(): ?bool
    {
        return $this->reg_vitesse;
    }

    public function setRegVitesse(bool $reg_vitesse): static
    {
        $this->reg_vitesse = $reg_vitesse;

        return $this;
    }

    public function isLimVitesse(): ?bool
    {
        return $this->lim_vitesse;
    }

    public function setLimVitesse(bool $lim_vitesse): static
    {
        $this->lim_vitesse = $lim_vitesse;

        return $this;
    }

    public function isCorrecTraj(): ?bool
    {
        return $this->correc_traj;
    }

    public function setCorrecTraj(bool $correc_traj): static
    {
        $this->correc_traj = $correc_traj;

        return $this;
    }

    public function isAideParking(): ?bool
    {
        return $this->aide_parking;
    }

    public function setAideParking(bool $aide_parking): static
    {
        $this->aide_parking = $aide_parking;

        return $this;
    }

    public function getPropTrac(): ?string
    {
        return $this->prop_trac;
    }

    public function setPropTrac(string $prop_trac): static
    {
        $this->prop_trac = $prop_trac;

        return $this;
    }

    public function getAvisVendeur(): ?string
    {
        return $this->avis_vendeur;
    }

    public function setAvisVendeur(?string $avis_vendeur): static
    {
        $this->avis_vendeur = $avis_vendeur;

        return $this;
    }
}
