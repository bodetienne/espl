<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidat
 *
 * @ORM\Table(name="candidat", indexes={@ORM\Index(name="FKformation", columns={"id_formation"})})
 * @ORM\Entity
 */
class Candidat
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
     * @ORM\Column(name="nom_candidat", type="string", length=50, nullable=false)
     */
    private $nomCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_candidat", type="string", length=50, nullable=false)
     */
    private $prenomCandidat;

    /**
     * @var int
     *
     * @ORM\Column(name="jour_naissance_candidat", type="integer", nullable=false)
     */
    private $jourNaissanceCandidat;

    /**
     * @var int
     *
     * @ORM\Column(name="mois_naissance_candidat", type="integer", nullable=false)
     */
    private $moisNaissanceCandidat;

    /**
     * @var int
     *
     * @ORM\Column(name="annee_naissance_candidat", type="integer", nullable=false)
     */
    private $anneeNaissanceCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naissance_candidat", type="string", length=50, nullable=false)
     */
    private $lieuNaissanceCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_candidat", type="string", length=255, nullable=false)
     */
    private $mailCandidat;

    /**
     * @var int
     *
     * @ORM\Column(name="fixe_candidat", type="integer", nullable=false)
     */
    private $fixeCandidat;

    /**
     * @var int
     *
     * @ORM\Column(name="mobile_candidat", type="integer", nullable=false)
     */
    private $mobileCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_candidat", type="string", length=70, nullable=false)
     */
    private $adresseCandidat;

    /**
     * @var int
     *
     * @ORM\Column(name="cp_candidat", type="integer", nullable=false)
     */
    private $cpCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_candidat", type="string", length=50, nullable=false)
     */
    private $villeCandidat;

    /**
     * @var int
     *
     * @ORM\Column(name="secu_candidat", type="integer", nullable=false)
     */
    private $secuCandidat;

    /**
     * @var bool
     *
     * @ORM\Column(name="permis_candidat", type="boolean", nullable=false)
     */
    private $permisCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="code_acces_candidat", type="string", length=6, nullable=false)
     */
    private $codeAccesCandidat;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_dossier_candidat", type="string", length=50, nullable=false)
     */
    private $etatDossierCandidat;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formation", referencedColumnName="id")
     * })
     */
    private $idFormation;

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

    public function getIdFormation(): ?Formation
    {
        return $this->idFormation;
    }

    public function setIdFormation(?Formation $idFormation): self
    {
        $this->idFormation = $idFormation;

        return $this;
    }


}
