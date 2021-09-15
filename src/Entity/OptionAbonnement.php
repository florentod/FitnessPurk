<?php

namespace App\Entity;

use App\Repository\OptionAbonnementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OptionAbonnementRepository::class)
 */
class OptionAbonnement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=ContratAbonnement::class, mappedBy="optionAbonnements")
     */
    private $contratAbonnements;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomOption;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tarif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeAcces;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    public function __construct()
    {
        $this->contratAbonnements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $contratAbonnement->addOptionAbonnement($this);
        }

        return $this;
    }

    public function removeContratAbonnement(ContratAbonnement $contratAbonnement): self
    {
        if ($this->contratAbonnements->removeElement($contratAbonnement)) {
            $contratAbonnement->removeOptionAbonnement($this);
        }

        return $this;
    }

    public function getNomOption(): ?string
    {
        return $this->nomOption;
    }

    public function setNomOption(?string $nomOption): self
    {
        $this->nomOption = $nomOption;

        return $this;
    }

    public function getTarif(): ?int
    {
        return $this->tarif;
    }

    public function setTarif(?int $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getTypeAcces(): ?string
    {
        return $this->typeAcces;
    }

    public function setTypeAcces(?string $typeAcces): self
    {
        $this->typeAcces = $typeAcces;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
