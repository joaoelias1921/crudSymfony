<?php

namespace ContainerIGcPkWQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder61f88 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer861cb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8a7c3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getConnection', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getMetadataFactory', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getExpressionBuilder', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'beginTransaction', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getCache', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getCache();
    }

    public function transactional($func)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'transactional', array('func' => $func), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'wrapInTransaction', array('func' => $func), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'commit', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->commit();
    }

    public function rollback()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'rollback', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getClassMetadata', array('className' => $className), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'createQuery', array('dql' => $dql), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'createNamedQuery', array('name' => $name), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'createQueryBuilder', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'flush', array('entity' => $entity), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'clear', array('entityName' => $entityName), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->clear($entityName);
    }

    public function close()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'close', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->close();
    }

    public function persist($entity)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'persist', array('entity' => $entity), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'remove', array('entity' => $entity), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'refresh', array('entity' => $entity), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'detach', array('entity' => $entity), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'merge', array('entity' => $entity), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getRepository', array('entityName' => $entityName), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'contains', array('entity' => $entity), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getEventManager', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getConfiguration', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'isOpen', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getUnitOfWork', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getProxyFactory', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'initializeObject', array('obj' => $obj), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'getFilters', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'isFiltersStateClean', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'hasFilters', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return $this->valueHolder61f88->hasFilters();
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

        $instance->initializer861cb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder61f88) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder61f88 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder61f88->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, '__get', ['name' => $name], $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        if (isset(self::$publicProperties8a7c3[$name])) {
            return $this->valueHolder61f88->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61f88;

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

        $targetObject = $this->valueHolder61f88;
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
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61f88;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder61f88;
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
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, '__isset', array('name' => $name), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61f88;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder61f88;
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
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, '__unset', array('name' => $name), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder61f88;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder61f88;
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
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, '__clone', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        $this->valueHolder61f88 = clone $this->valueHolder61f88;
    }

    public function __sleep()
    {
        $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, '__sleep', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;

        return array('valueHolder61f88');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer861cb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer861cb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer861cb && ($this->initializer861cb->__invoke($valueHolder61f88, $this, 'initializeProxy', array(), $this->initializer861cb) || 1) && $this->valueHolder61f88 = $valueHolder61f88;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder61f88;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder61f88;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
