<?php

namespace App\Entity;

use App\Repository\TypeAbonnementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeAbonnementRepository::class)
 */
class TypeAbonnement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=ContratAbonnement::class, mappedBy="typeAbonnnements")
     */
    private $contratAbonnements;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomAbonnement;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prixPremMois;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fraisInscription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $engagemennt;

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
            $contratAbonnement->setTypeAbonnnements($this);
        }

        return $this;
    }

    public function removeContratAbonnement(ContratAbonnement $contratAbonnement): self
    {
        if ($this->contratAbonnements->removeElement($contratAbonnement)) {
            // set the owning side to null (unless already changed)
            if ($contratAbonnement->getTypeAbonnnements() === $this) {
                $contratAbonnement->setTypeAbonnnements(null);
            }
        }

        return $this;
    }

    public function getNomAbonnement(): ?string
    {
        return $this->nomAbonnement;
    }

    public function setNomAbonnement(?string $nomAbonnement): self
    {
        $this->nomAbonnement = $nomAbonnement;

        return $this;
    }

    public function getPrixPremMois(): ?int
    {
        return $this->prixPremMois;
    }

    public function setPrixPremMois(?int $prixPremMois): self
    {
        $this->prixPremMois = $prixPremMois;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getFraisInscription(): ?int
    {
        return $this->fraisInscription;
    }

    public function setFraisInscription(?int $fraisInscription): self
    {
        $this->fraisInscription = $fraisInscription;

        return $this;
    }

    public function getEngagemennt(): ?string
    {
        return $this->engagemennt;
    }

    public function setEngagemennt(?string $engagemennt): self
    {
        $this->engagemennt = $engagemennt;

        return $this;
    }
}
