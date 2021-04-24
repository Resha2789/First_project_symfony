<?php

namespace ContainerQPTgQ6F;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb149e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer78d70 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesde6a1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getConnection', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getMetadataFactory', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getExpressionBuilder', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'beginTransaction', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getCache', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'transactional', array('func' => $func), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->transactional($func);
    }

    public function commit()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'commit', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->commit();
    }

    public function rollback()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'rollback', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getClassMetadata', array('className' => $className), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'createQuery', array('dql' => $dql), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'createNamedQuery', array('name' => $name), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'createQueryBuilder', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'flush', array('entity' => $entity), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'clear', array('entityName' => $entityName), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->clear($entityName);
    }

    public function close()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'close', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->close();
    }

    public function persist($entity)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'persist', array('entity' => $entity), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'remove', array('entity' => $entity), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'refresh', array('entity' => $entity), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'detach', array('entity' => $entity), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'merge', array('entity' => $entity), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'contains', array('entity' => $entity), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getEventManager', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getConfiguration', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'isOpen', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getUnitOfWork', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getProxyFactory', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'initializeObject', array('obj' => $obj), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'getFilters', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'isFiltersStateClean', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'hasFilters', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return $this->valueHolderb149e->hasFilters();
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

        $instance->initializer78d70 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb149e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb149e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb149e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, '__get', ['name' => $name], $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        if (isset(self::$publicPropertiesde6a1[$name])) {
            return $this->valueHolderb149e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb149e;

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

        $targetObject = $this->valueHolderb149e;
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
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb149e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb149e;
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
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, '__isset', array('name' => $name), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb149e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb149e;
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
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, '__unset', array('name' => $name), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb149e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb149e;
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
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, '__clone', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        $this->valueHolderb149e = clone $this->valueHolderb149e;
    }

    public function __sleep()
    {
        $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, '__sleep', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;

        return array('valueHolderb149e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer78d70 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer78d70;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer78d70 && ($this->initializer78d70->__invoke($valueHolderb149e, $this, 'initializeProxy', array(), $this->initializer78d70) || 1) && $this->valueHolderb149e = $valueHolderb149e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb149e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb149e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
