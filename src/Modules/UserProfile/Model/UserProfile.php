<?php

namespace App\Modules\UserProfile\Model;

use App\Model\Image;

class UserProfile
{
    public string $id;
    public ?string $name;
    public ?string $phone;
    public ?string $userDescription;
    public bool $isGuide;
    public ?string $avatarURL;
    public ?string $homeLocationID;
    public ?string $sex;
    public ?string $login;
    public ?string $password;
    public UserRating $userRating;
    public bool $isMaster;
    public array $socialNetworks = [];
    public array $masterTypesIDs = [];
    public ?string $masterStory;
    public ?array $skills = [];
    public int $usersFeedbacksNumber = 0;
    public int $mastersFeedbacksNumber = 0;

    //public Image $avatar;

    /**
     * @param string $id
     * @param string|null $name
     * @param string|null $phone
     * @param string|null $description
     * @param bool $isGuide
     * @param string|null $avatarURL
     * @param string|null $homeLocationID
     * @param string|null $sex
     * @param UserRating $userRating
     * @param Image|null $avatar
     * @param bool $isMaster
     * @param array|null $socialNetworks
     * @param array|null $masterTypesIDs
     * @param string|null $masterStory
     * @param array|null $skills
     * @param int $usersFeedbacksNumber
     * @param int $mastersFeedbacksNumber
     */
    public function __construct(
        string $id,
        ?string $name,
        ?string $phone,
        ?string $description,
        bool $isGuide,
        ?string $avatarURL,
        ?string $homeLocationID,
        ?string $sex,
        UserRating $userRating,
        Image $avatar = null,
        bool $isMaster = false,
        ?array $socialNetworks = [],
        ?array $masterTypesIDs = [],
        ?string $masterStory = "",
        ?array $skills = [],
        int $usersFeedbacksNumber = 0,
        int $mastersFeedbacksNumber = 0
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->userDescription = $description;
        $this->isGuide = $isGuide;
        $this->avatarURL = $avatarURL;
        $this->homeLocationID = $homeLocationID;
        $this->sex = $sex;
        $this->userRating = $userRating;
        $this->avatar = $avatar;
        $this->isMaster = $isMaster;
        $this->socialNetworks = $socialNetworks ?? [];
        $this->masterTypesIDs = $masterTypesIDs ?? [];
        $this->masterStory = $masterStory;
        $this->skills = $skills ?? [];
        $this->usersFeedbacksNumber = $usersFeedbacksNumber;
        $this->mastersFeedbacksNumber = $mastersFeedbacksNumber;
    }

    /**
     * @return string|null
     */
    public function getHomeLocationID(): ?string
    {
        return $this->homeLocationID;
    }

    /**
     * @param string|null $homeLocationID
     */
    public function setHomeLocationID(?string $homeLocationID): void
    {
        $this->homeLocationID = $homeLocationID;
    }

    /**
     * @return string|null
     */
    public function getSex(): ?string
    {
        return $this->sex;
    }

    /**
     * @param string|null $sex
     */
    public function setSex(?string $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return UserRating
     */
    public function getUserRating(): UserRating
    {
        return $this->userRating;
    }

    /**
     * @param UserRating $userRating
     */
    public function setUserRating(UserRating $userRating): void
    {
        $this->userRating = $userRating;
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
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * @param string|null $login
     */
    public function setLogin(?string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
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
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getUserDescription(): ?string
    {
        return $this->userDescription;
    }

    /**
     * @param string|null $userDescription
     */
    public function setUserDescription(?string $userDescription): void
    {
        $this->userDescription = $userDescription;
    }

    /**
     * @return bool
     */
    public function isGuide(): bool
    {
        return $this->isGuide;
    }

    /**
     * @param bool $isGuide
     */
    public function setIsGuide(bool $isGuide): void
    {
        $this->isGuide = $isGuide;
    }


    /**
     * @return array
     */
    public function getSocialNetworks(): array
    {
        return $this->socialNetworks;
    }

    /**
     * @param array $socialNetworks
     */
    public function setSocialNetworks(array $socialNetworks): void
    {
        $this->socialNetworks = $socialNetworks;
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
     * @return string|null
     */
    public function getMasterStory(): ?string
    {
        return $this->masterStory;
    }

    /**
     * @param string|null $masterStory
     */
    public function setMasterStory(?string $masterStory): void
    {
        $this->masterStory = $masterStory;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @param array $skills
     */
    public function setSkills(array $skills): void
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