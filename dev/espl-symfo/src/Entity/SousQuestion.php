<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousQuestion
 *
 * @ORM\Table(name="sous_question", indexes={@ORM\Index(name="FKquestion", columns={"id_question"})})
 * @ORM\Entity
 */
class SousQuestion
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
     * @var string|null
     *
     * @ORM\Column(name="option_ss_question", type="string", length=255, nullable=true)
     */
    private $optionSsQuestion;

    /**
     * @var \Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_question", referencedColumnName="id")
     * })
     */
    private $idQuestion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOptionSsQuestion(): ?string
    {
        return $this->optionSsQuestion;
    }

    public function setOptionSsQuestion(?string $optionSsQuestion): self
    {
        $this->optionSsQuestion = $optionSsQuestion;

        return $this;
    }

    public function getIdQuestion(): ?Question
    {
        return $this->idQuestion;
    }

    public function setIdQuestion(?Question $idQuestion): self
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }


}
