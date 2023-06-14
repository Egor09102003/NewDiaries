<?php

namespace App\Entity;

use App\Repository\MasterTypeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MasterTypeRepository::class)]
class MasterType
{
    #[ORM\Id]
    #[ORM\Column(type: Types::TEXT, length: 64)]
    private string $objID;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $masterTypeDescription = null;

    #[ORM\Column(length: 1024)]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $syncDate = null;

    public function getObjID(): ?string
    {
        return $this->objID;
    }

    public function setObjId(string $objID): self
    {
        $this->objID = $objID;

        return $this;
    }

    public function getMasterTypeDescription(): ?string
    {
        return $this->masterTypeDescription;
    }

    public function setMasterTypeDescription(?string $masterTypeDescription): self
    {
        $this->masterTypeDescription = $masterTypeDescription;

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

    public function getSyncDate(): ?\DateTimeInterface
    {
        return $this->syncDate;
    }

    public function setSyncDate(?\DateTimeInterface $syncDate): self
    {
        $this->syncDate = $syncDate;

        return $this;
    }
}
