<?php

namespace App\Entity;

use App\Repository\GiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GiteRepository::class)]
class Gite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?float $surface = null;

    #[ORM\Column]
    private ?int $nb_chambres = null;

    #[ORM\Column]
    private ?int $nb_lits = null;

    #[ORM\Column]
    private ?bool $accept_animaux = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $tarif_animaux = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $image = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ville $ville = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Proprietaire $proprietaire = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Contact $contact = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Prix $prix = null;

    #[ORM\ManyToMany(targetEntity: Service::class)]
    private Collection $service;

    #[ORM\ManyToMany(targetEntity: EquipementInterieur::class)]
    private Collection $equipement_interieur;

    #[ORM\ManyToMany(targetEntity: EquipementExterieur::class)]
    private Collection $equipement_exterieur;

    public function __construct()
    {
        $this->service = new ArrayCollection();
        $this->equipement_interieur = new ArrayCollection();
        $this->equipement_exterieur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getNbChambres(): ?int
    {
        return $this->nb_chambres;
    }

    public function setNbChambres(int $nb_chambres): self
    {
        $this->nb_chambres = $nb_chambres;

        return $this;
    }

    public function getNbLits(): ?int
    {
        return $this->nb_lits;
    }

    public function setNbLits(int $nb_lits): self
    {
        $this->nb_lits = $nb_lits;

        return $this;
    }

    public function isAcceptAnimaux(): ?bool
    {
        return $this->accept_animaux;
    }

    public function setAcceptAnimaux(bool $accept_animaux): self
    {
        $this->accept_animaux = $accept_animaux;

        return $this;
    }

    public function getTarifAnimaux(): ?string
    {
        return $this->tarif_animaux;
    }

    public function setTarifAnimaux(?string $tarif_animaux): self
    {
        $this->tarif_animaux = $tarif_animaux;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    public function setVille(?Ville $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getProprietaire(): ?Proprietaire
    {
        return $this->proprietaire;
    }

    public function setProprietaire(?Proprietaire $proprietaire): self
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function setContact(?Contact $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getPrix(): ?Prix
    {
        return $this->prix;
    }

    public function setPrix(?Prix $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection<int, Service>
     */
    public function getService(): Collection
    {
        return $this->service;
    }

    public function addService(Service $service): self
    {
        if (!$this->service->contains($service)) {
            $this->service->add($service);
        }

        return $this;
    }

    public function removeService(Service $service): self
    {
        $this->service->removeElement($service);

        return $this;
    }

    /**
     * @return Collection<int, EquipementInterieur>
     */
    public function getEquipementInterieur(): Collection
    {
        return $this->equipement_interieur;
    }

    public function addEquipementInterieur(EquipementInterieur $equipementInterieur): self
    {
        if (!$this->equipement_interieur->contains($equipementInterieur)) {
            $this->equipement_interieur->add($equipementInterieur);
        }

        return $this;
    }

    public function removeEquipementInterieur(EquipementInterieur $equipementInterieur): self
    {
        $this->equipement_interieur->removeElement($equipementInterieur);

        return $this;
    }

    /**
     * @return Collection<int, EquipementExterieur>
     */
    public function getEquipementExterieur(): Collection
    {
        return $this->equipement_exterieur;
    }

    public function addEquipementExterieur(EquipementExterieur $equipementExterieur): self
    {
        if (!$this->equipement_exterieur->contains($equipementExterieur)) {
            $this->equipement_exterieur->add($equipementExterieur);
        }

        return $this;
    }

    public function removeEquipementExterieur(EquipementExterieur $equipementExterieur): self
    {
        $this->equipement_exterieur->removeElement($equipementExterieur);

        return $this;
    }
}
