<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReponseSpecifiqueRepository")
 */
class ReponseSpecifique
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="blob")
     */
    private $dossierReflexion;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $connaissanceEcole;

    /**
     * @ORM\Column(type="boolean")
     */
    private $participationJpo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $questionsPrealables;

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
}
