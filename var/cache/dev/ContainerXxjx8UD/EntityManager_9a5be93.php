<?php

namespace ContainerXxjx8UD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7b13b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd71b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese54fa = [
        
    ];

    public function getConnection()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getConnection', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getMetadataFactory', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getExpressionBuilder', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'beginTransaction', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getCache', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'transactional', array('func' => $func), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'commit', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->commit();
    }

    public function rollback()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'rollback', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getClassMetadata', array('className' => $className), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'createQuery', array('dql' => $dql), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'createNamedQuery', array('name' => $name), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'createQueryBuilder', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'flush', array('entity' => $entity), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'clear', array('entityName' => $entityName), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->clear($entityName);
    }

    public function close()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'close', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->close();
    }

    public function persist($entity)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'persist', array('entity' => $entity), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'remove', array('entity' => $entity), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'detach', array('entity' => $entity), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'merge', array('entity' => $entity), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'contains', array('entity' => $entity), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getEventManager', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getConfiguration', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'isOpen', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getUnitOfWork', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getProxyFactory', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'initializeObject', array('obj' => $obj), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'getFilters', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'isFiltersStateClean', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'hasFilters', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return $this->valueHolder7b13b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerdd71b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder7b13b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7b13b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7b13b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, '__get', ['name' => $name], $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        if (isset(self::$publicPropertiese54fa[$name])) {
            return $this->valueHolder7b13b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b13b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7b13b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b13b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7b13b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, '__isset', array('name' => $name), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b13b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7b13b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, '__unset', array('name' => $name), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7b13b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7b13b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, '__clone', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        $this->valueHolder7b13b = clone $this->valueHolder7b13b;
    }

    public function __sleep()
    {
        $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, '__sleep', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;

        return array('valueHolder7b13b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdd71b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdd71b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdd71b && ($this->initializerdd71b->__invoke($valueHolder7b13b, $this, 'initializeProxy', array(), $this->initializerdd71b) || 1) && $this->valueHolder7b13b = $valueHolder7b13b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7b13b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7b13b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
