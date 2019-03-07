<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="FKecole3", columns={"id_ecole"})})
 * @ORM\Entity
 */
class Question
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
     * @ORM\Column(name="intitule_question", type="string", length=255, nullable=false)
     */
    private $intituleQuestion;

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

    public function getIntituleQuestion(): ?string
    {
        return $this->intituleQuestion;
    }

    public function setIntituleQuestion(string $intituleQuestion): self
    {
        $this->intituleQuestion = $intituleQuestion;

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
