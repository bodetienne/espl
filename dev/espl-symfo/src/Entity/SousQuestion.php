<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SousQuestionRepository")
 */
class SousQuestion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $optionSsQuestion;

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
}
