<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
#[ApiResource(
    normalizationContext: ['groups' => ['read:produits']],
    itemOperations: [
       'PUT','DELETE','PATCH','GET'
   ],
)]
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    #[Groups(['read:produits','read:user'])]
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups(['read:produits','read:user'])]
    private $nom;

    /**
     * @ORM\Column(type="float")
     */
    #[Groups(['read:produits','read:user'])]
    private $prix;

    /**
     * @ORM\Column(type="text")
     */
    #[Groups(['read:produits'])]
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups(['read:produits'])]
    private $type;

    /**
     * @ORM\Column(type="integer")
     */
    #[Groups(['read:produits','read:user'])]
    private $stock;

    /**
     * @ORM\Column(type="date")
     */
    #[Groups(['read:produits'])]
    private $dateSortie;

    /**
     * @ORM\OneToMany(targetEntity=Medias::class, mappedBy="produit")
     */
    #[Groups(['read:produits','read:user'])]
    private $medias;

    /**
     * @ORM\ManyToMany(targetEntity=Categorie::class, mappedBy="produit")
     */
    #[Groups(['read:produits'])]
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity=Liste::class, mappedBy="produit", orphanRemoval=true)
     */
    private $listes;

    public function __construct()
    {
        $this->commande = new ArrayCollection();
        $this->medias = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->produitCommands = new ArrayCollection();
        $this->listes = new ArrayCollection();
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

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->dateSortie;
    }

    public function setDateSortie(\DateTimeInterface $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * @return Collection|Medias[]
     */
    public function getMedias(): Collection
    {
        return $this->medias;
    }

    public function addMedia(Medias $media): self
    {
        if (!$this->medias->contains($media)) {
            $this->medias[] = $media;
            $media->setProduit($this);
        }

        return $this;
    }

    public function removeMedia(Medias $media): self
    {
        if ($this->medias->removeElement($media)) {
            // set the owning side to null (unless already changed)
            if ($media->getProduit() === $this) {
                $media->setProduit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Categorie[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categorie $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->addProduit($this);
        }

        return $this;
    }

    public function removeCategory(Categorie $category): self
    {
        if ($this->categories->removeElement($category)) {
            $category->removeProduit($this);
        }

        return $this;
    }

    /**
     * @return Collection|Liste[]
     */
    public function getListes(): Collection
    {
        return $this->listes;
    }

    public function addListe(Liste $liste): self
    {
        if (!$this->listes->contains($liste)) {
            $this->listes[] = $liste;
            $liste->setProduit($this);
        }

        return $this;
    }

    public function removeListe(Liste $liste): self
    {
        if ($this->listes->removeElement($liste)) {
            // set the owning side to null (unless already changed)
            if ($liste->getProduit() === $this) {
                $liste->setProduit(null);
            }
        }

        return $this;
    }

}
