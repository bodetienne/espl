<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChargeRecrutementRepository")
 */
class ChargeRecrutement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomCdr;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenomCdr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailCdr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCdr(): ?string
    {
        return $this->nomCdr;
    }

    public function setNomCdr(string $nomCdr): self
    {
        $this->nomCdr = $nomCdr;

        return $this;
    }

    public function getPrenomCdr(): ?string
    {
        return $this->prenomCdr;
    }

    public function setPrenomCdr(string $prenomCdr): self
    {
        $this->prenomCdr = $prenomCdr;

        return $this;
    }


    public function getMailCdr(): ?string
    {
        return $this->mailCdr;
    }

    public function setMailCdr(string $mailCdr): self
    {
        $this->mailCdr = $mailCdr;

        return $this;
    }
}
