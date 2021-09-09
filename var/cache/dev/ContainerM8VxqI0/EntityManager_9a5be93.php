<?php

namespace ContainerM8VxqI0;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereaa46 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerce0b7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd8d31 = [
        
    ];

    public function getConnection()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getConnection', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getMetadataFactory', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getExpressionBuilder', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'beginTransaction', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getCache', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getCache();
    }

    public function transactional($func)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'transactional', array('func' => $func), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->transactional($func);
    }

    public function commit()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'commit', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->commit();
    }

    public function rollback()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'rollback', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getClassMetadata', array('className' => $className), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'createQuery', array('dql' => $dql), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'createNamedQuery', array('name' => $name), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'createQueryBuilder', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'flush', array('entity' => $entity), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'clear', array('entityName' => $entityName), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->clear($entityName);
    }

    public function close()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'close', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->close();
    }

    public function persist($entity)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'persist', array('entity' => $entity), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'remove', array('entity' => $entity), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'refresh', array('entity' => $entity), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'detach', array('entity' => $entity), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'merge', array('entity' => $entity), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getRepository', array('entityName' => $entityName), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'contains', array('entity' => $entity), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getEventManager', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getConfiguration', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'isOpen', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getUnitOfWork', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getProxyFactory', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'initializeObject', array('obj' => $obj), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'getFilters', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'isFiltersStateClean', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'hasFilters', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return $this->valueHoldereaa46->hasFilters();
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

        $instance->initializerce0b7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereaa46) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereaa46 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereaa46->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, '__get', ['name' => $name], $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        if (isset(self::$publicPropertiesd8d31[$name])) {
            return $this->valueHoldereaa46->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaa46;

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

        $targetObject = $this->valueHoldereaa46;
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
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaa46;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereaa46;
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
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, '__isset', array('name' => $name), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaa46;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereaa46;
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
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, '__unset', array('name' => $name), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereaa46;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereaa46;
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
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, '__clone', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        $this->valueHoldereaa46 = clone $this->valueHoldereaa46;
    }

    public function __sleep()
    {
        $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, '__sleep', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;

        return array('valueHoldereaa46');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerce0b7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerce0b7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerce0b7 && ($this->initializerce0b7->__invoke($valueHoldereaa46, $this, 'initializeProxy', array(), $this->initializerce0b7) || 1) && $this->valueHoldereaa46 = $valueHoldereaa46;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereaa46;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereaa46;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
