<?php

namespace App\Modules\Search\Model;

class SearchUserItem
{
    public string $id;
    public string $name;
    public ?string $avatarURL;
    public bool $isMaster = false;
    public array $masterTypesIDs = [];
    public ?array $skills = [];
    public int $feedbacksNumber = 0;

    /**
     * @param string $id
     * @param string $name
     * @param string|null $avatarURL
     * @param bool $isMaster
     * @param array|null $masterTypesIDs
     * @param array|null $skills
     * @param int $feedbacksNumber
     */
    public function __construct(string $id,
                                string $name,
                                ?string $avatarURL,
                                bool $isMaster = false,
                                ?array $masterTypesIDs = [],
                                ?array $skills = [],
                                int $feedbacksNumber = 0
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->avatarURL = $avatarURL;
        $this->isMaster = $isMaster;
        $this->masterTypesIDs = $masterTypesIDs ?? [];
        $this->skills = $skills ?? [];
        $this->feedbacksNumber = $feedbacksNumber;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getAvatarURL(): ?string
    {
        return $this->avatarURL;
    }

    /**
     * @param string|null $avatarURL
     */
    public function setAvatarURL(?string $avatarURL): void
    {
        $this->avatarURL = $avatarURL;
    }

    /**
     * @return bool
     */
    public function isMaster(): bool
    {
        return $this->isMaster;
    }

    /**
     * @param bool $isMaster
     */
    public function setIsMaster(bool $isMaster): void
    {
        $this->isMaster = $isMaster;
    }

    /**
     * @return array
     */
    public function getMasterTypesIDs(): array
    {
        return $this->masterTypesIDs;
    }

    /**
     * @param array $masterTypesIDs
     */
    public function setMasterTypesIDs(array $masterTypesIDs): void
    {
        $this->masterTypesIDs = $masterTypesIDs;
    }

    /**
     * @return array|null
     */
    public function getSkills(): ?array
    {
        return $this->skills;
    }

    /**
     * @param array|null $skills
     */
    public function setSkills(?array $skills): void
    {
        $this->skills = $skills;
    }

    /**
     * @return int
     */
    public function getFeedbacksNumber(): int
    {
        return $this->feedbacksNumber;
    }

    /**
     * @param int $feedbacksNumber
     */
    public function setFeedbacksNumber(int $feedbacksNumber): void
    {
        $this->feedbacksNumber = $feedbacksNumber;
    }



}