<?php

namespace App\Entity;

use App\Repository\ConceptRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConceptRepository::class)
 */
class Concept
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Salle::class, inversedBy="concepts")
     */
    private $salle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomConcept;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $article;

    public function __construct()
    {
        $this->salle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Salle[]
     */
    public function getSalle(): Collection
    {
        return $this->salle;
    }

    public function addSalle(Salle $salle): self
    {
        if (!$this->salle->contains($salle)) {
            $this->salle[] = $salle;
        }

        return $this;
    }

    public function removeSalle(Salle $salle): self
    {
        $this->salle->removeElement($salle);

        return $this;
    }

    public function getNomConcept(): ?string
    {
        return $this->nomConcept;
    }

    public function setNomConcept(string $nomConcept): self
    {
        $this->nomConcept = $nomConcept;

        return $this;
    }

    public function getArticle(): ?string
    {
        return $this->article;
    }

    public function setArticle(?string $article): self
    {
        $this->article = $article;

        return $this;
    }
}
