<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PieceJointeRepository")
 */
class PieceJointe
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
    private $photoIdentite;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $releveNotes;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $diplome;

    /**
     * @ORM\Column(type="blob")
     */
    private $cv;

    /**
     * @ORM\Column(type="blob")
     */
    private $lettreMotivation;

    /**
     * @ORM\Column(type="blob")
     */
    private $pieceIdentite;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $creditsEcts;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoIdentite()
    {
        return $this->photoIdentite;
    }

    public function setPhotoIdentite($photoIdentite): self
    {
        $this->photoIdentite = $photoIdentite;

        return $this;
    }

    public function getReleveNotes()
    {
        return $this->releveNotes;
    }

    public function setReleveNotes($releveNotes): self
    {
        $this->releveNotes = $releveNotes;

        return $this;
    }

    public function getDiplome()
    {
        return $this->diplome;
    }

    public function setDiplome($diplome): self
    {
        $this->diplome = $diplome;

        return $this;
    }

    public function getCv()
    {
        return $this->cv;
    }

    public function setCv($cv): self
    {
        $this->cv = $cv;

        return $this;
    }

    public function getLettreMotivation()
    {
        return $this->lettreMotivation;
    }

    public function setLettreMotivation($lettreMotivation): self
    {
        $this->lettreMotivation = $lettreMotivation;

        return $this;
    }

    public function getPieceIdentite()
    {
        return $this->pieceIdentite;
    }

    public function setPieceIdentite($pieceIdentite): self
    {
        $this->pieceIdentite = $pieceIdentite;

        return $this;
    }

    public function getCreditsEcts()
    {
        return $this->creditsEcts;
    }

    public function setCreditsEcts($creditsEcts): self
    {
        $this->creditsEcts = $creditsEcts;

        return $this;
    }
}
