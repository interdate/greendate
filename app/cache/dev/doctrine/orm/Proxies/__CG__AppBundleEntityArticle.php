<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \AppBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'content', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'brief', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'headerType', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'isActive', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'isOnHomepage', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'date', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'imageName', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'uri', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'imageAlt');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'content', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'brief', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'headerType', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'isActive', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'isOnHomepage', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'date', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'imageName', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'uri', '' . "\0" . 'AppBundle\\Entity\\Article' . "\0" . 'imageAlt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', array($content));

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', array());

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrief($brief)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrief', array($brief));

        return parent::setBrief($brief);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrief()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrief', array());

        return parent::getBrief();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeaderType($headerType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeaderType', array($headerType));

        return parent::setHeaderType($headerType);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeaderType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeaderType', array());

        return parent::getHeaderType();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', array($isActive));

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', array());

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsOnHomepage($isOnHomepage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsOnHomepage', array($isOnHomepage));

        return parent::setIsOnHomepage($isOnHomepage);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsOnHomepage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsOnHomepage', array());

        return parent::getIsOnHomepage();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageName($imageName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageName', array($imageName));

        return parent::setImageName($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageName', array());

        return parent::getImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUri($uri)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUri', array($uri));

        return parent::setUri($uri);
    }

    /**
     * {@inheritDoc}
     */
    public function getUri()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUri', array());

        return parent::getUri();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageAlt($imageAlt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageAlt', array($imageAlt));

        return parent::setImageAlt($imageAlt);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageAlt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageAlt', array());

        return parent::getImageAlt();
    }

}