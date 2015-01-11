<?php

namespace TYPO3\Flow\Persistence\Doctrine\Proxies\__CG__\Project\Helpiez\Domain\Model;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Rating extends \Project\Helpiez\Domain\Model\Rating implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function __wakeup()
    {
        $this->__load();
        return parent::__wakeup();
    }

    public function Flow_Aop_Proxy_fixMethodsAndAdvicesArrayForDoctrineProxies()
    {
        $this->__load();
        return parent::Flow_Aop_Proxy_fixMethodsAndAdvicesArrayForDoctrineProxies();
    }

    public function Flow_Aop_Proxy_fixInjectedPropertiesForDoctrineProxies()
    {
        $this->__load();
        return parent::Flow_Aop_Proxy_fixInjectedPropertiesForDoctrineProxies();
    }

    public function Flow_Aop_Proxy_invokeJoinPoint(\TYPO3\Flow\Aop\JoinPointInterface $joinPoint)
    {
        $this->__load();
        return parent::Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
    }

    public function getTimestamp()
    {
        $this->__load();
        return parent::getTimestamp();
    }

    public function setTimestamp($timestamp = NULL)
    {
        $this->__load();
        return parent::setTimestamp($timestamp);
    }

    public function updatedTimestamps()
    {
        $this->__load();
        return parent::updatedTimestamps();
    }

    public function getRating()
    {
        $this->__load();
        return parent::getRating();
    }

    public function setRating($rating)
    {
        $this->__load();
        return parent::setRating($rating);
    }

    public function getUserName()
    {
        $this->__load();
        return parent::getUserName();
    }

    public function setUserName($userName)
    {
        $this->__load();
        return parent::setUserName($userName);
    }

    public function getOrganisation()
    {
        $this->__load();
        return parent::getOrganisation();
    }

    public function setOrganisation($organisation)
    {
        $this->__load();
        return parent::setOrganisation($organisation);
    }


    public function __sleep()
    {
        return array_merge(array('__isInitialized__'), parent::__sleep());
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        parent::__clone();
    }
}