<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Garant
 *
 * @ORM\Table(name="garant", indexes={@ORM\Index(name="FKcandidat", columns={"id_candidat"})})
 * @ORM\Entity
 */
class Garant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_garant", type="string", length=50, nullable=false)
     */
    private $nomGarant;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_garant", type="string", length=50, nullable=false)
     */
    private $prenomGarant;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_garant", type="string", length=250, nullable=false)
     */
    private $mailGarant;

    /**
     * @var int
     *
     * @ORM\Column(name="tel_garant", type="integer", nullable=false)
     */
    private $telGarant;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_parente", type="string", length=50, nullable=false)
     */
    private $lienParente;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_garant", type="string", length=70, nullable=false)
     */
    private $adresseGarant;

    /**
     * @var int
     *
     * @ORM\Column(name="cp_garant", type="integer", nullable=false)
     */
    private $cpGarant;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_garant", type="string", length=50, nullable=false)
     */
    private $villeGarant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profession_garant", type="string", length=50, nullable=true)
     */
    private $professionGarant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entreprise_garant", type="string", length=50, nullable=true)
     */
    private $entrepriseGarant;

    /**
     * @var \Garant
     *
     * @ORM\ManyToOne(targetEntity="Garant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_candidat", referencedColumnName="id")
     * })
     */
    private $idCandidat;

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

    public function getIdCandidat(): ?self
    {
        return $this->idCandidat;
    }

    public function setIdCandidat(?self $idCandidat): self
    {
        $this->idCandidat = $idCandidat;

        return $this;
    }


}
