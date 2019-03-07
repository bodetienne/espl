<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecole
 *
 * @ORM\Table(name="ecole")
 * @ORM\Entity
 */
class Ecole
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
     * @ORM\Column(name="nom_ecole", type="string", length=50, nullable=false)
     */
    private $nomEcole;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEcole(): ?string
    {
        return $this->nomEcole;
    }

    public function setNomEcole(string $nomEcole): self
    {
        $this->nomEcole = $nomEcole;

        return $this;
    }


}
