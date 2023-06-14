<?php

namespace App\Modules\UsersList\Model;

class UsersListItem
{
    public string $id;
    public string $name;
    public ?string $avatarURL;
    public bool $isMaster = false;
    public array $masterTypesIDs = [];
    public ?array $skills = [];
    public int $usersFeedbacksNumber = 0;
    public int $mastersFeedbacksNumber = 0;

    /**
     * @param string $id
     * @param string $name
     * @param string|null $avatarURL
     * @param bool $isMaster
     * @param array|null $masterTypesIDs
     * @param array|null $skills
     * @param int $usersFeedbacksNumber
     * @param int $mastersFeedbacksNumber
     */
    public function __construct(string $id,
                                string $name,
                                ?string $avatarURL,
                                bool $isMaster = false,
                                ?array $masterTypesIDs = [],
                                ?array $skills = [],
                                int $usersFeedbacksNumber = 0,
                                int $mastersFeedbacksNumber = 0
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->avatarURL = $avatarURL;
        $this->isMaster = $isMaster;
        $this->masterTypesIDs = $masterTypesIDs ?? [];
        $this->skills = $skills ?? [];
        $this->usersFeedbacksNumber = $usersFeedbacksNumber;
        $this->mastersFeedbacksNumber = $mastersFeedbacksNumber;
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
     * @return string
     */
    public function getAvatarURL(): string
    {
        return $this->avatarURL;
    }

    /**
     * @param string $avatarURL
     */
    public function setAvatarURL(string $avatarURL): void
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
    public function getUsersFeedbacksNumber(): int
    {
        return $this->usersFeedbacksNumber;
    }

    /**
     * @param int $usersFeedbacksNumber
     */
    public function setUsersFeedbacksNumber(int $usersFeedbacksNumber): void
    {
        $this->usersFeedbacksNumber = $usersFeedbacksNumber;
    }

    /**
     * @return int
     */
    public function getMastersFeedbacksNumber(): int
    {
        return $this->mastersFeedbacksNumber;
    }

    /**
     * @param int $mastersFeedbacksNumber
     */
    public function setMastersFeedbacksNumber(int $mastersFeedbacksNumber): void
    {
        $this->mastersFeedbacksNumber = $mastersFeedbacksNumber;
    }


}