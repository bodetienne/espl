<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PieceJointe
 *
 * @ORM\Table(name="piece_jointe", indexes={@ORM\Index(name="FKcandidat2", columns={"id_candidat"})})
 * @ORM\Entity
 */
class PieceJointe
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
     *@Assert\File(mimeTypes={ "image/png", "image/jpeg" })
     * @ORM\Column(name="photo_identite", type="blob", length=0, nullable=false)
     */
    private $photoIdentite;

    /**
     * @var string|null
     *
     *@Assert\File(mimeTypes={ "image/png", "image/jpeg", "file/pdf" })
     * @ORM\Column(name="releve_notes", type="blob", length=0, nullable=true)
     */
    private $releveNotes;

    /**
     * @var string|null
     *
     *@Assert\File(mimeTypes={ "image/png", "image/jpeg", "file/pdf" })
     * @ORM\Column(name="diplome", type="blob", length=0, nullable=true)
     */
    private $diplome;

    /**
     * @var string
     *
     *@Assert\File(mimeTypes={ "image/png", "image/jpeg", "file/pdf" })
     * @ORM\Column(name="cv", type="blob", length=0, nullable=false)
     */
    private $cv;

    /**
     * @var string
     *
     *@Assert\File(mimeTypes={ "file/pdf" })
     * @ORM\Column(name="lettre_motivation", type="blob", length=0, nullable=false)
     */
    private $lettreMotivation;

    /**
     * @var string
     *
     *@Assert\File(mimeTypes={ "image/png", "image/jpeg", "file/pdf" })
     * @ORM\Column(name="piece_identite", type="blob", length=0, nullable=false)
     */
    private $pieceIdentite;

    /**
     * @var string|null
     *
     *@Assert\File(mimeTypes={ "image/png", "image/jpeg", "file/pdf" })
     * @ORM\Column(name="credits_ects", type="blob", length=0, nullable=true)
     */
    private $creditsEcts;

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
