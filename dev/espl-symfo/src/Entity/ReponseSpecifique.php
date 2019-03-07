<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReponseSpecifique
 *
 * @ORM\Table(name="reponse_specifique", indexes={@ORM\Index(name="FKcandidat3", columns={"id_candidat"})})
 * @ORM\Entity
 */
class ReponseSpecifique
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
     * @ORM\Column(name="dossier_reflexion", type="blob", length=0, nullable=false)
     */
    private $dossierReflexion;

    /**
     * @var string
     *
     * @ORM\Column(name="connaissance_ecole", type="string", length=50, nullable=false)
     */
    private $connaissanceEcole;

    /**
     * @var bool
     *
     * @ORM\Column(name="participation_jpo", type="boolean", nullable=false)
     */
    private $participationJpo;

    /**
     * @var string
     *
     * @ORM\Column(name="questions_prealables", type="string", length=255, nullable=false)
     */
    private $questionsPrealables;

    /**
     * @var \Candidat
     *
     * @ORM\ManyToOne(targetEntity="Candidat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_candidat", referencedColumnName="id")
     * })
     */
    private $idCandidat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDossierReflexion()
    {
        return $this->dossierReflexion;
    }

    public function setDossierReflexion($dossierReflexion): self
    {
        $this->dossierReflexion = $dossierReflexion;

        return $this;
    }

    public function getConnaissanceEcole(): ?string
    {
        return $this->connaissanceEcole;
    }

    public function setConnaissanceEcole(string $connaissanceEcole): self
    {
        $this->connaissanceEcole = $connaissanceEcole;

        return $this;
    }

    public function getParticipationJpo(): ?bool
    {
        return $this->participationJpo;
    }

    public function setParticipationJpo(bool $participationJpo): self
    {
        $this->participationJpo = $participationJpo;

        return $this;
    }

    public function getQuestionsPrealables(): ?string
    {
        return $this->questionsPrealables;
    }

    public function setQuestionsPrealables(string $questionsPrealables): self
    {
        $this->questionsPrealables = $questionsPrealables;

        return $this;
    }

    public function getIdCandidat(): ?Candidat
    {
        return $this->idCandidat;
    }

    public function setIdCandidat(?Candidat $idCandidat): self
    {
        $this->idCandidat = $idCandidat;

        return $this;
    }


}
