<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\Column(type: Types::TEXT, length: 64)]
    private string $objID;

    #[ORM\Column(length: 1024)]
    private ?string $name = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    private array $tags = [];

    #[ORM\Column(length: 255)]
    private ?string $ownerID = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $skillDescription = null;

    #[ORM\Column(length: 1024, nullable: true)]
    private ?string $internationalName = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $internationalDescription = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $syncDate;

    public function getObjID(): ?string
    {
        return $this->objID;
    }

    public function setObjId(string $objID): self
    {
        $this->objID = $objID;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getOwnerID(): ?string
    {
        return $this->ownerID;
    }

    public function setOwnerID(string $ownerID): self
    {
        $this->ownerID = $ownerID;

        return $this;
    }

    public function getSkillDescription(): ?string
    {
        return $this->skillDescription;
    }

    public function setSkillDescription(?string $skillDescription): self
    {
        $this->skillDescription = $skillDescription;

        return $this;
    }

    public function getInternationalName(): ?string
    {
        return $this->internationalName;
    }

    public function setInternationalName(?string $internationalName): self
    {
        $this->internationalName = $internationalName;

        return $this;
    }

    public function getInternationalDescription(): ?string
    {
        return $this->internationalDescription;
    }

    public function setInternationalDescription(?string $internationalDescription): self
    {
        $this->internationalDescription = $internationalDescription;

        return $this;
    }

    public function getSyncDate(): ?\DateTimeInterface
    {
        return $this->syncDate ?? null;
    }

    public function setSyncDate(?\DateTimeInterface $syncDate): self
    {
        $this->syncDate = $syncDate;

        return $this;
    }
}
