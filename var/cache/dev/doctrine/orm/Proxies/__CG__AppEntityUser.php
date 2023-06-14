<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'apiToken', '' . "\0" . 'App\\Entity\\User' . "\0" . 'phone', '' . "\0" . 'App\\Entity\\User' . "\0" . 'description', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isGuide', '' . "\0" . 'App\\Entity\\User' . "\0" . 'name', '' . "\0" . 'App\\Entity\\User' . "\0" . 'avatar', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastSuccessfulSyncDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastSyncTryDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tripsRoles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'usersSuccessNote', '' . "\0" . 'App\\Entity\\User' . "\0" . 'usersNote', '' . "\0" . 'App\\Entity\\User' . "\0" . 'homeLocationID', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sex', '' . "\0" . 'App\\Entity\\User' . "\0" . 'apiTokenExpiresAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isMaster', '' . "\0" . 'App\\Entity\\User' . "\0" . 'socialNetworks', '' . "\0" . 'App\\Entity\\User' . "\0" . 'masterTypesIDs', '' . "\0" . 'App\\Entity\\User' . "\0" . 'masterStory', '' . "\0" . 'App\\Entity\\User' . "\0" . 'skills', '' . "\0" . 'App\\Entity\\User' . "\0" . 'currentRating'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'apiToken', '' . "\0" . 'App\\Entity\\User' . "\0" . 'phone', '' . "\0" . 'App\\Entity\\User' . "\0" . 'description', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isGuide', '' . "\0" . 'App\\Entity\\User' . "\0" . 'name', '' . "\0" . 'App\\Entity\\User' . "\0" . 'avatar', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastSuccessfulSyncDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'lastSyncTryDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'tripsRoles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'usersSuccessNote', '' . "\0" . 'App\\Entity\\User' . "\0" . 'usersNote', '' . "\0" . 'App\\Entity\\User' . "\0" . 'homeLocationID', '' . "\0" . 'App\\Entity\\User' . "\0" . 'sex', '' . "\0" . 'App\\Entity\\User' . "\0" . 'apiTokenExpiresAt', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isMaster', '' . "\0" . 'App\\Entity\\User' . "\0" . 'socialNetworks', '' . "\0" . 'App\\Entity\\User' . "\0" . 'masterTypesIDs', '' . "\0" . 'App\\Entity\\User' . "\0" . 'masterStory', '' . "\0" . 'App\\Entity\\User' . "\0" . 'skills', '' . "\0" . 'App\\Entity\\User' . "\0" . 'currentRating'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId(?int $id): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $username): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getApiToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiToken', []);

        return parent::getApiToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiToken(?string $apiToken): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiToken', [$apiToken]);

        return parent::setApiToken($apiToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone(?string $phone): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsGuide(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsGuide', []);

        return parent::getIsGuide();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsGuide(bool $isGuide): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsGuide', [$isGuide]);

        return parent::setIsGuide($isGuide);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(?string $name): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar(?string $avatar): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$avatar]);

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastSuccessfulSyncDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastSuccessfulSyncDate', []);

        return parent::getLastSuccessfulSyncDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastSuccessfulSyncDate(?\DateTimeInterface $lastSuccessfulSyncDate): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastSuccessfulSyncDate', [$lastSuccessfulSyncDate]);

        return parent::setLastSuccessfulSyncDate($lastSuccessfulSyncDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastSyncTryDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastSyncTryDate', []);

        return parent::getLastSyncTryDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastSyncTryDate(?\DateTimeInterface $lastSyncTryDate): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastSyncTryDate', [$lastSyncTryDate]);

        return parent::setLastSyncTryDate($lastSyncTryDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getTripsRoles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTripsRoles', []);

        return parent::getTripsRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function addTripsRole(\App\Entity\TripUserRole $tripsRole): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTripsRole', [$tripsRole]);

        return parent::addTripsRole($tripsRole);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTripsRole(\App\Entity\TripUserRole $tripsRole): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTripsRole', [$tripsRole]);

        return parent::removeTripsRole($tripsRole);
    }

    /**
     * {@inheritDoc}
     */
    public function getHomeLocationID(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHomeLocationID', []);

        return parent::getHomeLocationID();
    }

    /**
     * {@inheritDoc}
     */
    public function setHomeLocationID(?string $homeLocationID): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHomeLocationID', [$homeLocationID]);

        return parent::setHomeLocationID($homeLocationID);
    }

    /**
     * {@inheritDoc}
     */
    public function getSex(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSex', []);

        return parent::getSex();
    }

    /**
     * {@inheritDoc}
     */
    public function setSex(?string $sex): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSex', [$sex]);

        return parent::setSex($sex);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiTokenExpiresAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiTokenExpiresAt', []);

        return parent::getApiTokenExpiresAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiTokenExpiresAt(?\DateTimeImmutable $apiTokenExpiresAt): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiTokenExpiresAt', [$apiTokenExpiresAt]);

        return parent::setApiTokenExpiresAt($apiTokenExpiresAt);
    }

    /**
     * {@inheritDoc}
     */
    public function isTokenExpired(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTokenExpired', []);

        return parent::isTokenExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsMaster(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsMaster', []);

        return parent::getIsMaster();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsMaster(bool $isMaster): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsMaster', [$isMaster]);

        return parent::setIsMaster($isMaster);
    }

    /**
     * {@inheritDoc}
     */
    public function getSocialNetworks(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSocialNetworks', []);

        return parent::getSocialNetworks();
    }

    /**
     * {@inheritDoc}
     */
    public function setSocialNetworks(?array $socialNetworks): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSocialNetworks', [$socialNetworks]);

        return parent::setSocialNetworks($socialNetworks);
    }

    /**
     * {@inheritDoc}
     */
    public function getMasterTypesIDs(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMasterTypesIDs', []);

        return parent::getMasterTypesIDs();
    }

    /**
     * {@inheritDoc}
     */
    public function setMasterTypesIDs(?array $masterTypesIDs): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMasterTypesIDs', [$masterTypesIDs]);

        return parent::setMasterTypesIDs($masterTypesIDs);
    }

    /**
     * {@inheritDoc}
     */
    public function getMasterStory(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMasterStory', []);

        return parent::getMasterStory();
    }

    /**
     * {@inheritDoc}
     */
    public function setMasterStory(?string $masterStory): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMasterStory', [$masterStory]);

        return parent::setMasterStory($masterStory);
    }

    /**
     * {@inheritDoc}
     */
    public function getSkills(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkills', []);

        return parent::getSkills();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkills(?array $skills): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkills', [$skills]);

        return parent::setSkills($skills);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentRating(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentRating', []);

        return parent::getCurrentRating();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentRating(?array $currentRating): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentRating', [$currentRating]);

        return parent::setCurrentRating($currentRating);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsersSuccessNote(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsersSuccessNote', []);

        return parent::getUsersSuccessNote();
    }

}
