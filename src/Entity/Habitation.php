<?php

namespace App\Entity;

use App\Repository\HabitationRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: HabitationRepository::class)]
class Habitation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $TypeHabitation = null;

    #[ORM\Column]
    private ?int $SurfaceHabitable = null;

    #[ORM\OneToMany(targetEntity: Habitant::class, mappedBy: 'habitation')]
    #[ORM\JoinColumn(nullable: true)]
    private $habitants;

    public function __construct()
    {
        $this->habitants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTypeHabitation(): ?string
    {
        return $this->TypeHabitation;
    }

    public function setTypeHabitation(string $TypeHabitation): static
    {
        $this->TypeHabitation = $TypeHabitation;

        return $this;
    }

    public function getSurfaceHabitable(): ?int
    {
        return $this->SurfaceHabitable;
    }

    public function setSurfaceHabitable(int $SurfaceHabitable): static
    {
        $this->SurfaceHabitable = $SurfaceHabitable;

        return $this;
    }

    
    public function getHabitants(): Collection
    {
        return $this->habitants;
    }

    public function addHabitant(Habitant $habitant): self
    {
        if (!$this->habitants->contains($habitant)) {
            $this->habitants[] = $habitant;
            $habitant->setHabitation($this);
        }

        return $this;
    }

    public function removeHabitant(Habitant $habitant): self
    {
        if ($this->habitants->removeElement($habitant)) {
            if ($habitant->getHabitation() === $this) {
                $habitant->setHabitation(null);
            }
        }

        return $this;
    }
}
