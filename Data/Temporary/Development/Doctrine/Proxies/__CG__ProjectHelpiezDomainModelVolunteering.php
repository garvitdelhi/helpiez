<?php

namespace TYPO3\Flow\Persistence\Doctrine\Proxies\__CG__\Project\Helpiez\Domain\Model;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Volunteering extends \Project\Helpiez\Domain\Model\Volunteering implements \Doctrine\ORM\Proxy\Proxy
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

    public function getTags()
    {
        $this->__load();
        return parent::getTags();
    }

    public function setTags($tags)
    {
        $this->__load();
        return parent::setTags($tags);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getLocation()
    {
        $this->__load();
        return parent::getLocation();
    }

    public function setLocation($location)
    {
        $this->__load();
        return parent::setLocation($location);
    }

    public function getOpenings()
    {
        $this->__load();
        return parent::getOpenings();
    }

    public function setOpenings($openings)
    {
        $this->__load();
        return parent::setOpenings($openings);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
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