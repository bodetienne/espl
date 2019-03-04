<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GarantRepository")
 */
class Garant
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
    private $nomGarant;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenomGarant;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $mailGarant;

    /**
     * @ORM\Column(type="integer")
     */
    private $telGarant;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lienParente;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $adresseGarant;

    /**
     * @ORM\Column(type="integer")
     */
    private $cpGarant;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $villeGarant;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $professionGarant;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $entrepriseGarant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGarant(): ?string
    {
        return $this->nomGarant;
    }

    public function setNomGarant(string $nomGarant): self
    {
        $this->nomGarant = $nomGarant;

        return $this;
    }

    public function getPrenomGarant(): ?string
    {
        return $this->prenomGarant;
    }

    public function setPrenomGarant(string $prenomGarant): self
    {
        $this->prenomGarant = $prenomGarant;

        return $this;
    }

    public function getMailGarant(): ?string
    {
        return $this->mailGarant;
    }

    public function setMailGarant(string $mailGarant): self
    {
        $this->mailGarant = $mailGarant;

        return $this;
    }

    public function getTelGarant(): ?int
    {
        return $this->telGarant;
    }

    public function setTelGarant(int $telGarant): self
    {
        $this->telGarant = $telGarant;

        return $this;
    }

    public function getLienParente(): ?string
    {
        return $this->lienParente;
    }

    public function setLienParente(string $lienParente): self
    {
        $this->lienParente = $lienParente;

        return $this;
    }

    public function getAdresseGarant(): ?string
    {
        return $this->adresseGarant;
    }

    public function setAdresseGarant(string $adresseGarant): self
    {
        $this->adresseGarant = $adresseGarant;

        return $this;
    }

    public function getCpGarant(): ?int
    {
        return $this->cpGarant;
    }

    public function setCpGarant(int $cpGarant): self
    {
        $this->cpGarant = $cpGarant;

        return $this;
    }

    public function getVilleGarant(): ?string
    {
        return $this->villeGarant;
    }

    public function setVilleGarant(string $villeGarant): self
    {
        $this->villeGarant = $villeGarant;

        return $this;
    }

    public function getProfessionGarant(): ?string
    {
        return $this->professionGarant;
    }

    public function setProfessionGarant(?string $professionGarant): self
    {
        $this->professionGarant = $professionGarant;

        return $this;
    }

    public function getEntrepriseGarant(): ?string
    {
        return $this->entrepriseGarant;
    }

    public function setEntrepriseGarant(?string $entrepriseGarant): self
    {
        $this->entrepriseGarant = $entrepriseGarant;

        return $this;
    }
}
