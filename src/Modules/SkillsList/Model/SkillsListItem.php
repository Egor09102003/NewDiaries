<?php

namespace App\Modules\SkillsList\Model;

class SkillsListItem
{
    public string $objID;
    public string $ownerID;
    public ?array $tags;
    public string $name;
    public ?string $skillDescription;
    public ?string $internationalDescription;
    public ?string $internationalName;

    /**
     * @param string $objID
     * @param string $ownerID
     * @param array|null $tags
     * @param string $name
     * @param string|null $skillDescription
     * @param string|null $internationalDescription
     * @param string|null $internationalName
     */
    public function __construct(string $objID, string $ownerID, ?array $tags, string $name, ?string $skillDescription, ?string $internationalDescription, ?string $internationalName)
    {
        $this->objID = $objID;
        $this->ownerID = $ownerID;
        $this->tags = $tags;
        $this->name = $name;
        $this->skillDescription = $skillDescription;
        $this->internationalDescription = $internationalDescription;
        $this->internationalName = $internationalName;
    }
}