<?php

namespace ContainerPxyTJNK;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2388b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4b4e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties88a1f = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getConnection', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getMetadataFactory', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getExpressionBuilder', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'beginTransaction', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getCache', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'transactional', array('func' => $func), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->transactional($func);
    }

    public function commit()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'commit', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->commit();
    }

    public function rollback()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'rollback', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'createQuery', array('dql' => $dql), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'createQueryBuilder', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'flush', array('entity' => $entity), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'clear', array('entityName' => $entityName), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'close', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->close();
    }

    public function persist($entity)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'persist', array('entity' => $entity), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'remove', array('entity' => $entity), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'refresh', array('entity' => $entity), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'detach', array('entity' => $entity), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'merge', array('entity' => $entity), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'contains', array('entity' => $entity), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getEventManager', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getConfiguration', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'isOpen', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getUnitOfWork', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getProxyFactory', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'getFilters', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'isFiltersStateClean', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'hasFilters', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return $this->valueHolder2388b->hasFilters();
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

        $instance->initializerc4b4e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2388b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2388b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2388b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, '__get', ['name' => $name], $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        if (isset(self::$publicProperties88a1f[$name])) {
            return $this->valueHolder2388b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2388b;

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

        $targetObject = $this->valueHolder2388b;
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
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2388b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2388b;
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
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, '__isset', array('name' => $name), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2388b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2388b;
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
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, '__unset', array('name' => $name), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2388b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2388b;
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
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, '__clone', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        $this->valueHolder2388b = clone $this->valueHolder2388b;
    }

    public function __sleep()
    {
        $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, '__sleep', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;

        return array('valueHolder2388b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4b4e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4b4e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4b4e && ($this->initializerc4b4e->__invoke($valueHolder2388b, $this, 'initializeProxy', array(), $this->initializerc4b4e) || 1) && $this->valueHolder2388b = $valueHolder2388b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2388b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2388b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}