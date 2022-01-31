<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * /**
     * @Assert\Positive
     */
    private $quantite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $articleName;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $demande;

    /**
     * @ORM\Column(type="float")
     */
    private $prixArticle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageArticle;

    /**
     * @ORM\Column(type="integer")
     */
    private $articleId;

    /**
     * @ORM\Column(type="integer")
     */
    private $userId;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }


    public function getArticleName(): ?string
    {
        return $this->articleName;
    }

    public function setArticleName(string $articleName): self
    {
        $this->articleName = $articleName;

        return $this;
    }
    public function getDemande(): ?string
    {
        return $this->demande;
    }

    public function setDemande(string $demande): self
    {
        $this->demande = $demande;

        return $this;
    }

    public function getPrixArticle(): ?float
    {
        return $this->prixArticle;
    }

    public function setPrixArticle(float $prixArticle): self
    {
        $this->prixArticle = $prixArticle;

        return $this;
    }

    public function getImageArticle(): ?string
    {
        return $this->imageArticle;
    }

    public function setImageArticle(string $imageArticle): self
    {
        $this->imageArticle = $imageArticle;

        return $this;
    }

    public function getArticleId(): ?int
    {
        return $this->articleId;
    }

    public function setArticleId(int $articleId): self
    {
        $this->articleId = $articleId;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
