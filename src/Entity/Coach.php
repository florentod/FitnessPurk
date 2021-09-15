<?php

namespace App\Entity;

use App\Repository\CoachRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoachRepository::class)
 */
class Coach
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Salle::class, mappedBy="coachs")
     */
    private $salles;

    /**
     * @ORM\ManyToMany(targetEntity=ContratAbonnement::class, mappedBy="coachs")
     */
    private $contratAbonnements;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCoach;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomCoach;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clubCoach;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoCoach;

    /**
     * @ORM\Column(type="integer")
     */
    private $telCoach;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $discipline;

    public function __construct()
    {
        $this->salles = new ArrayCollection();
        $this->contratAbonnements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Salle[]
     */
    public function getSalles(): Collection
    {
        return $this->salles;
    }

    public function addSalle(Salle $salle): self
    {
        if (!$this->salles->contains($salle)) {
            $this->salles[] = $salle;
            $salle->addCoach($this);
        }

        return $this;
    }

    public function removeSalle(Salle $salle): self
    {
        if ($this->salles->removeElement($salle)) {
            $salle->removeCoach($this);
        }

        return $this;
    }

    /**
     * @return Collection|ContratAbonnement[]
     */
    public function getContratAbonnements(): Collection
    {
        return $this->contratAbonnements;
    }

    public function addContratAbonnement(ContratAbonnement $contratAbonnement): self
    {
        if (!$this->contratAbonnements->contains($contratAbonnement)) {
            $this->contratAbonnements[] = $contratAbonnement;
            $contratAbonnement->addCoach($this);
        }

        return $this;
    }

    public function removeContratAbonnement(ContratAbonnement $contratAbonnement): self
    {
        if ($this->contratAbonnements->removeElement($contratAbonnement)) {
            $contratAbonnement->removeCoach($this);
        }

        return $this;
    }

    public function getNomCoach(): ?string
    {
        return $this->nomCoach;
    }

    public function setNomCoach(string $nomCoach): self
    {
        $this->nomCoach = $nomCoach;

        return $this;
    }

    public function getPrenomCoach(): ?string
    {
        return $this->prenomCoach;
    }

    public function setPrenomCoach(string $prenomCoach): self
    {
        $this->prenomCoach = $prenomCoach;

        return $this;
    }

    public function getClubCoach(): ?string
    {
        return $this->clubCoach;
    }

    public function setClubCoach(string $clubCoach): self
    {
        $this->clubCoach = $clubCoach;

        return $this;
    }

    public function getPhotoCoach(): ?string
    {
        return $this->photoCoach;
    }

    public function setPhotoCoach(?string $photoCoach): self
    {
        $this->photoCoach = $photoCoach;

        return $this;
    }

    public function getTelCoach(): ?int
    {
        return $this->telCoach;
    }

    public function setTelCoach(int $telCoach): self
    {
        $this->telCoach = $telCoach;

        return $this;
    }

    public function getDiscipline(): ?string
    {
        return $this->discipline;
    }

    public function setDiscipline(?string $discipline): self
    {
        $this->discipline = $discipline;

        return $this;
    }
}
