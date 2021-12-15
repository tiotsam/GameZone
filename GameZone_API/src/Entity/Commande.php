<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\CommandeRepository;
use App\Entity\User;
use App\Entity\Liste;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
#[ApiResource]
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    #[Groups(['read:user'])]
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups(['read:user'])]
    private $adressFacturation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups(['read:user'])]
    private $adresseLivraison;

    /**
     * @ORM\Column(type="date")
     */
    #[Groups(['read:user'])]
    private $dateCommande;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="commandes")
     */
    
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=liste::class, mappedBy="commande", orphanRemoval=true)
     */
    #[Groups(['read:user'])]
    private $liste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups(['read:user'])]
    private $statut;

    public function __construct()
    {
        $this->liste = new ArrayCollection();
    }    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdressFacturation(): ?string
    {
        return $this->adressFacturation;
    }

    public function setAdressFacturation(string $adressFacturation): self
    {
        $this->adressFacturation = $adressFacturation;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->adresseLivraison;
    }

    public function setAdresseLivraison(string $adresseLivraison): self
    {
        $this->adresseLivraison = $adresseLivraison;

        return $this;
    }

    // public function setQuantité(int $quantité): self
    // {
    //     $this->quantité = $quantité;

    //     return $this;
    // }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }
    
    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|liste[]
     */
    public function getListe(): Collection
    {
        return $this->liste;
    }

    public function addListe(liste $liste): self
    {
        if (!$this->liste->contains($liste)) {
            $this->liste[] = $liste;
            $liste->setCommande($this);
        }

        return $this;
    }

    public function removeListe(liste $liste): self
    {
        if ($this->liste->removeElement($liste)) {
            // set the owning side to null (unless already changed)
            if ($liste->getCommande() === $this) {
                $liste->setCommande(null);
            }
        }

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
}
