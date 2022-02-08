<?php

namespace ContainerK17LlZb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder300be = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc9bf3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties45405 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getConnection', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getMetadataFactory', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getExpressionBuilder', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'beginTransaction', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getCache', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'transactional', array('func' => $func), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'commit', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->commit();
    }

    public function rollback()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'rollback', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getClassMetadata', array('className' => $className), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'createQuery', array('dql' => $dql), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'createNamedQuery', array('name' => $name), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'createQueryBuilder', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'flush', array('entity' => $entity), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'clear', array('entityName' => $entityName), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->clear($entityName);
    }

    public function close()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'close', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->close();
    }

    public function persist($entity)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'persist', array('entity' => $entity), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'remove', array('entity' => $entity), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'refresh', array('entity' => $entity), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'detach', array('entity' => $entity), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'merge', array('entity' => $entity), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'contains', array('entity' => $entity), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getEventManager', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getConfiguration', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'isOpen', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getUnitOfWork', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getProxyFactory', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'initializeObject', array('obj' => $obj), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'getFilters', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'isFiltersStateClean', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'hasFilters', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return $this->valueHolder300be->hasFilters();
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

        $instance->initializerc9bf3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder300be) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder300be = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder300be->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, '__get', ['name' => $name], $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        if (isset(self::$publicProperties45405[$name])) {
            return $this->valueHolder300be->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder300be;

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

        $targetObject = $this->valueHolder300be;
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
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder300be;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder300be;
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
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, '__isset', array('name' => $name), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder300be;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder300be;
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
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, '__unset', array('name' => $name), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder300be;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder300be;
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
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, '__clone', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        $this->valueHolder300be = clone $this->valueHolder300be;
    }

    public function __sleep()
    {
        $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, '__sleep', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;

        return array('valueHolder300be');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc9bf3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc9bf3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc9bf3 && ($this->initializerc9bf3->__invoke($valueHolder300be, $this, 'initializeProxy', array(), $this->initializerc9bf3) || 1) && $this->valueHolder300be = $valueHolder300be;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder300be;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder300be;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
