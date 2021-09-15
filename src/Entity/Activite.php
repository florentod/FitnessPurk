<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 */
class Activite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Salle::class, inversedBy="activites")
     */
    private $salles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomActivite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $articleActivite;

    public function __construct()
    {
        $this->salles = new ArrayCollection();
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
        }

        return $this;
    }

    public function removeSalle(Salle $salle): self
    {
        $this->salles->removeElement($salle);

        return $this;
    }

    public function getNomActivite(): ?string
    {
        return $this->nomActivite;
    }

    public function setNomActivite(string $nomActivite): self
    {
        $this->nomActivite = $nomActivite;

        return $this;
    }

    public function getArticleActivite(): ?string
    {
        return $this->articleActivite;
    }

    public function setArticleActivite(?string $articleActivite): self
    {
        $this->articleActivite = $articleActivite;

        return $this;
    }
}
