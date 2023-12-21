<?php

namespace App\Entity;

use App\Repository\HabitantRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: HabitantRepository::class)]
#[Broadcast]
class Habitant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomFamille = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomIndividu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDeNaissance = null;

    #[ORM\Column(length: 255)]
    private ?string $genreIdentifie = null;

    #[ORM\ManyToOne(targetEntity: Habitation::class, inversedBy: 'habitants')]
    #[ORM\JoinColumn(name: "habitation_id", referencedColumnName: "id",nullable:true)]
    private $habitation;

    public function getAge(): int
    {
        $today = new \DateTime();
        $age = $today->diff($this->dateDeNaissance)->y;

        return $age;
    }

    public function findByNomFamille($nomFamille)
    {
        return $this->createQueryBuilder('h')
            ->where('h.nomFamille LIKE :nomFamille')
            ->setParameter('nomFamille', '%' . $nomFamille . '%')
            ->getQuery()
            ->getResult();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFamille(): ?string
    {
        return $this->nomFamille;
    }

    public function setNomFamille(string $nomFamille): static
    {
        $this->nomFamille = $nomFamille;

        return $this;
    }

    public function getPrenomIndividu(): ?string
    {
        return $this->prenomIndividu;
    }

    public function setPrenomIndividu(string $prenomIndividu): static
    {
        $this->prenomIndividu = $prenomIndividu;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $dateDeNaissance): static
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    public function getGenreIdentifie(): ?string
    {
        return $this->genreIdentifie;
    }

    public function setGenreIdentifie(string $genreIdentifie): static
    {
        $this->genreIdentifie = $genreIdentifie;

        return $this;
    }

    public function getHabitation(): ?Habitation
    {
        return $this->habitation;
    }

    public function setHabitation(?Habitation $habitation): self
    {
        $this->habitation = $habitation;

        return $this;
    }
}
