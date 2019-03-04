<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidatRepository")
 */
class Candidat
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
    private $nomCandidat;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenomCandidat;

    /**
     * @ORM\Column(type="integer")
     */
    private $jourNaissanceCandidat;

    /**
     * @ORM\Column(type="integer")
     */
    private $moisNaissanceCandidat;

    /**
     * @ORM\Column(type="integer")
     */
    private $anneeNaissanceCandidat;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lieuNaissanceCandidat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailCandidat;

    /**
     * @ORM\Column(type="integer")
     */
    private $fixeCandidat;

    /**
     * @ORM\Column(type="integer")
     */
    private $mobileCandidat;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $adresseCandidat;

    /**
     * @ORM\Column(type="integer")
     */
    private $cpCandidat;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $villeCandidat;

    /**
     * @ORM\Column(type="integer")
     */
    private $secuCandidat;

    /**
     * @ORM\Column(type="boolean")
     */
    private $permisCandidat;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $codeAccesCandidat;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $etatDossierCandidat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCandidat(): ?string
    {
        return $this->nomCandidat;
    }

    public function setNomCandidat(string $nomCandidat): self
    {
        $this->nomCandidat = $nomCandidat;

        return $this;
    }

    public function getPrenomCandidat(): ?string
    {
        return $this->prenomCandidat;
    }

    public function setPrenomCandidat(string $prenomCandidat): self
    {
        $this->prenomCandidat = $prenomCandidat;

        return $this;
    }

    public function getJourNaissanceCandidat(): ?int
    {
        return $this->jourNaissanceCandidat;
    }

    public function setJourNaissanceCandidat(int $jourNaissanceCandidat): self
    {
        $this->jourNaissanceCandidat = $jourNaissanceCandidat;

        return $this;
    }

    public function getMoisNaissanceCandidat(): ?int
    {
        return $this->moisNaissanceCandidat;
    }

    public function setMoisNaissanceCandidat(int $moisNaissanceCandidat): self
    {
        $this->moisNaissanceCandidat = $moisNaissanceCandidat;

        return $this;
    }

    public function getAnneeNaissanceCandidat(): ?int
    {
        return $this->anneeNaissanceCandidat;
    }

    public function setAnneeNaissanceCandidat(int $anneeNaissanceCandidat): self
    {
        $this->anneeNaissanceCandidat = $anneeNaissanceCandidat;

        return $this;
    }

    public function getLieuNaissanceCandidat(): ?string
    {
        return $this->lieuNaissanceCandidat;
    }

    public function setLieuNaissanceCandidat(string $lieuNaissanceCandidat): self
    {
        $this->lieuNaissanceCandidat = $lieuNaissanceCandidat;

        return $this;
    }

    public function getMailCandidat(): ?string
    {
        return $this->mailCandidat;
    }

    public function setMailCandidat(string $mailCandidat): self
    {
        $this->mailCandidat = $mailCandidat;

        return $this;
    }

    public function getFixeCandidat(): ?int
    {
        return $this->fixeCandidat;
    }

    public function setFixeCandidat(int $fixeCandidat): self
    {
        $this->fixeCandidat = $fixeCandidat;

        return $this;
    }

    public function getMobileCandidat(): ?int
    {
        return $this->mobileCandidat;
    }

    public function setMobileCandidat(int $mobileCandidat): self
    {
        $this->mobileCandidat = $mobileCandidat;

        return $this;
    }

    public function getAdresseCandidat(): ?string
    {
        return $this->adresseCandidat;
    }

    public function setAdresseCandidat(string $adresseCandidat): self
    {
        $this->adresseCandidat = $adresseCandidat;

        return $this;
    }

    public function getCpCandidat(): ?int
    {
        return $this->cpCandidat;
    }

    public function setCpCandidat(int $cpCandidat): self
    {
        $this->cpCandidat = $cpCandidat;

        return $this;
    }

    public function getVilleCandidat(): ?string
    {
        return $this->villeCandidat;
    }

    public function setVilleCandidat(string $villeCandidat): self
    {
        $this->villeCandidat = $villeCandidat;

        return $this;
    }

    public function getSecuCandidat(): ?int
    {
        return $this->secuCandidat;
    }

    public function setSecuCandidat(int $secuCandidat): self
    {
        $this->secuCandidat = $secuCandidat;

        return $this;
    }

    public function getPermisCandidat(): ?bool
    {
        return $this->permisCandidat;
    }

    public function setPermisCandidat(bool $permisCandidat): self
    {
        $this->permisCandidat = $permisCandidat;

        return $this;
    }

    public function getCodeAccesCandidat(): ?string
    {
        return $this->codeAccesCandidat;
    }

    public function setCodeAccesCandidat(string $codeAccesCandidat): self
    {
        $this->codeAccesCandidat = $codeAccesCandidat;

        return $this;
    }

    public function getEtatDossierCandidat(): ?string
    {
        return $this->etatDossierCandidat;
    }

    public function setEtatDossierCandidat(string $etatDossierCandidat): self
    {
        $this->etatDossierCandidat = $etatDossierCandidat;

        return $this;
    }
}
