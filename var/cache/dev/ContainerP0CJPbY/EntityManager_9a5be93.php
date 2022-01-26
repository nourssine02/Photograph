<?php

namespace ContainerP0CJPbY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf752c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer258c1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6a28a = [
        
    ];

    public function getConnection()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getConnection', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getMetadataFactory', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getExpressionBuilder', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'beginTransaction', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getCache', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'transactional', array('func' => $func), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'commit', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->commit();
    }

    public function rollback()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'rollback', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getClassMetadata', array('className' => $className), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'createQuery', array('dql' => $dql), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'createNamedQuery', array('name' => $name), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'createQueryBuilder', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'flush', array('entity' => $entity), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'clear', array('entityName' => $entityName), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->clear($entityName);
    }

    public function close()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'close', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->close();
    }

    public function persist($entity)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'persist', array('entity' => $entity), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'remove', array('entity' => $entity), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'refresh', array('entity' => $entity), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'detach', array('entity' => $entity), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'merge', array('entity' => $entity), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'contains', array('entity' => $entity), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getEventManager', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getConfiguration', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'isOpen', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getUnitOfWork', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getProxyFactory', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'initializeObject', array('obj' => $obj), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'getFilters', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'isFiltersStateClean', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'hasFilters', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return $this->valueHolderf752c->hasFilters();
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

        $instance->initializer258c1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf752c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf752c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf752c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, '__get', ['name' => $name], $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        if (isset(self::$publicProperties6a28a[$name])) {
            return $this->valueHolderf752c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf752c;

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

        $targetObject = $this->valueHolderf752c;
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
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf752c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf752c;
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
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, '__isset', array('name' => $name), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf752c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf752c;
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
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, '__unset', array('name' => $name), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf752c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf752c;
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
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, '__clone', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        $this->valueHolderf752c = clone $this->valueHolderf752c;
    }

    public function __sleep()
    {
        $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, '__sleep', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;

        return array('valueHolderf752c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer258c1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer258c1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer258c1 && ($this->initializer258c1->__invoke($valueHolderf752c, $this, 'initializeProxy', array(), $this->initializer258c1) || 1) && $this->valueHolderf752c = $valueHolderf752c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf752c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf752c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
