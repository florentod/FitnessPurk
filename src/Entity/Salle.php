<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SalleRepository::class)
 */
class Salle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Concept::class, mappedBy="salle")
     */
    private $concepts;

    /**
     * @ORM\ManyToMany(targetEntity=Activite::class, mappedBy="salles")
     */
    private $activites;

    /**
     * @ORM\ManyToMany(targetEntity=ArticleWeb::class, mappedBy="salles")
     */
    private $articleWebs;

    /**
     * @ORM\ManyToMany(targetEntity=Coach::class, inversedBy="salles")
     */
    private $coachs;

    /**
     * @ORM\OneToMany(targetEntity=ContratAbonnement::class, mappedBy="salles")
     */
    private $contratAbonnements;

    public function __construct()
    {
        $this->concepts = new ArrayCollection();
        $this->activites = new ArrayCollection();
        $this->articleWebs = new ArrayCollection();
        $this->coachs = new ArrayCollection();
        $this->contratAbonnements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Concept[]
     */
    public function getConcepts(): Collection
    {
        return $this->concepts;
    }

    public function addConcept(Concept $concept): self
    {
        if (!$this->concepts->contains($concept)) {
            $this->concepts[] = $concept;
            $concept->addSalle($this);
        }

        return $this;
    }

    public function removeConcept(Concept $concept): self
    {
        if ($this->concepts->removeElement($concept)) {
            $concept->removeSalle($this);
        }

        return $this;
    }

    /**
     * @return Collection|Activite[]
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(Activite $activite): self
    {
        if (!$this->activites->contains($activite)) {
            $this->activites[] = $activite;
            $activite->addSalle($this);
        }

        return $this;
    }

    public function removeActivite(Activite $activite): self
    {
        if ($this->activites->removeElement($activite)) {
            $activite->removeSalle($this);
        }

        return $this;
    }

    /**
     * @return Collection|ArticleWeb[]
     */
    public function getArticleWebs(): Collection
    {
        return $this->articleWebs;
    }

    public function addArticleWeb(ArticleWeb $articleWeb): self
    {
        if (!$this->articleWebs->contains($articleWeb)) {
            $this->articleWebs[] = $articleWeb;
            $articleWeb->addSalle($this);
        }

        return $this;
    }

    public function removeArticleWeb(ArticleWeb $articleWeb): self
    {
        if ($this->articleWebs->removeElement($articleWeb)) {
            $articleWeb->removeSalle($this);
        }

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
            $contratAbonnement->setSalles($this);
        }

        return $this;
    }

    public function removeContratAbonnement(ContratAbonnement $contratAbonnement): self
    {
        if ($this->contratAbonnements->removeElement($contratAbonnement)) {
            // set the owning side to null (unless already changed)
            if ($contratAbonnement->getSalles() === $this) {
                $contratAbonnement->setSalles(null);
            }
        }

        return $this;
    }
}
