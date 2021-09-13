<?php

namespace App\Entity;

use App\Repository\ContratAbonnementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContratAbonnementRepository::class)
 */
class ContratAbonnement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Salle::class, inversedBy="contratAbonnements")
     */
    private $salles;

    /**
     * @ORM\ManyToMany(targetEntity=Coach::class, inversedBy="contratAbonnements")
     */
    private $coachs;

    /**
     * @ORM\ManyToOne(targetEntity=TypeAbonnement::class, inversedBy="contratAbonnements")
     */
    private $typeAbonnnements;

    /**
     * @ORM\ManyToMany(targetEntity=OptionAbonnement::class, inversedBy="contratAbonnements")
     */
    private $optionAbonnements;

    public function __construct()
    {
        $this->coachs = new ArrayCollection();
        $this->optionAbonnements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalles(): ?Salle
    {
        return $this->salles;
    }

    public function setSalles(?Salle $salles): self
    {
        $this->salles = $salles;

        return $this;
    }

    /**
     * @return Collection|Coach[]
     */
    public function getCoachs(): Collection
    {
        return $this->coachs;
    }

    public function addCoach(Coach $coach): self
    {
        if (!$this->coachs->contains($coach)) {
            $this->coachs[] = $coach;
        }

        return $this;
    }

    public function removeCoach(Coach $coach): self
    {
        $this->coachs->removeElement($coach);

        return $this;
    }

    public function getTypeAbonnnements(): ?TypeAbonnement
    {
        return $this->typeAbonnnements;
    }

    public function setTypeAbonnnements(?TypeAbonnement $typeAbonnnements): self
    {
        $this->typeAbonnnements = $typeAbonnnements;

        return $this;
    }

    /**
     * @return Collection|OptionAbonnement[]
     */
    public function getOptionAbonnements(): Collection
    {
        return $this->optionAbonnements;
    }

    public function addOptionAbonnement(OptionAbonnement $optionAbonnement): self
    {
        if (!$this->optionAbonnements->contains($optionAbonnement)) {
            $this->optionAbonnements[] = $optionAbonnement;
        }

        return $this;
    }

    public function removeOptionAbonnement(OptionAbonnement $optionAbonnement): self
    {
        $this->optionAbonnements->removeElement($optionAbonnement);

        return $this;
    }
}
