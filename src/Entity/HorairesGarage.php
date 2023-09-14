<?php

namespace App\Entity;

use App\Repository\HorairesGarageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HorairesGarageRepository::class)]
class HorairesGarage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $jour = null;

    #[ORM\Column(nullable: true)]
    private ?int $ouv_am = null;

    #[ORM\Column(nullable: true)]
    private ?int $fer_am = null;

    #[ORM\Column(nullable: true)]
    private ?int $ouv_pm = null;

    #[ORM\Column(nullable: true)]
    private ?int $fer_pm = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): static
    {
        $this->jour = $jour;

        return $this;
    }

    public function getOuvAm(): ?int
    {
        return $this->ouv_am;
    }

    public function setOuvAm(?int $ouv_am): static
    {
        $this->ouv_am = $ouv_am;

        return $this;
    }

    public function getFerAm(): ?int
    {
        return $this->fer_am;
    }

    public function setFerAm(?int $fer_am): static
    {
        $this->fer_am = $fer_am;

        return $this;
    }

    public function getOuvPm(): ?int
    {
        return $this->ouv_pm;
    }

    public function setOuvPm(?int $ouv_pm): static
    {
        $this->ouv_pm = $ouv_pm;

        return $this;
    }

    public function getFerPm(): ?int
    {
        return $this->fer_pm;
    }

    public function setFerPm(?int $fer_pm): static
    {
        $this->fer_pm = $fer_pm;

        return $this;
    }
}
