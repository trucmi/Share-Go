<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServiceRepository")
 */
class Service
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $Hote;

    /**
     * @ORM\Column(type="string", length=255 ,nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255 ,nullable=true)
     */
    private $recompense;

    public function getId()
    {
        return $this->id;
    }

    public function getHote(): ?string
    {
        return $this->Hote;
    }

    public function setHote(string $Hote): self
    {
        $this->Hote = $Hote;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getRecompense(): ?string
    {
        return $this->recompense;
    }

    public function setRecompense(string $recompense): self
    {
        $this->recompense = $recompense;

        return $this;
    }
}
