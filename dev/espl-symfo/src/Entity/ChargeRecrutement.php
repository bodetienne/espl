<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChargeRecrutement
 *
 * @ORM\Table(name="charge_recrutement", indexes={@ORM\Index(name="FKecole2", columns={"id_ecole"})})
 * @ORM\Entity
 */
class ChargeRecrutement
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
     * @ORM\Column(name="nom_cdr", type="string", length=50, nullable=false)
     */
    private $nomCdr;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_cdr", type="string", length=50, nullable=false)
     */
    private $prenomCdr;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_cdr", type="string", length=255, nullable=false)
     */
    private $mailCdr;

    /**
     * @var \Ecole
     *
     * @ORM\ManyToOne(targetEntity="Ecole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ecole", referencedColumnName="id")
     * })
     */
    private $idEcole;

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

    public function getIdEcole(): ?Ecole
    {
        return $this->idEcole;
    }

    public function setIdEcole(?Ecole $idEcole): self
    {
        $this->idEcole = $idEcole;

        return $this;
    }


}
