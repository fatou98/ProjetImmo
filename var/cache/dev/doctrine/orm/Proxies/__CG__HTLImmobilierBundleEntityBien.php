<?php

namespace Proxies\__CG__\HTL\ImmobilierBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Bien extends \HTL\ImmobilierBundle\Entity\Bien implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'id', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'nombien', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'etat', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'description', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'prixlocation', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'parentbien', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'libellelocalite', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'typebien', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'images'];
        }

        return ['__isInitialized__', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'id', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'nombien', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'etat', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'description', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'prixlocation', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'parentbien', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'libellelocalite', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'typebien', '' . "\0" . 'HTL\\ImmobilierBundle\\Entity\\Bien' . "\0" . 'images'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Bien $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombien($nombien)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombien', [$nombien]);

        return parent::setNombien($nombien);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombien', []);

        return parent::getNombien();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixlocation($prixlocation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixlocation', [$prixlocation]);

        return parent::setPrixlocation($prixlocation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixlocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixlocation', []);

        return parent::getPrixlocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibellelocalite(\HTL\ImmobilierBundle\Entity\Localite $libellelocalite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibellelocalite', [$libellelocalite]);

        return parent::setLibellelocalite($libellelocalite);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibellelocalite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibellelocalite', []);

        return parent::getLibellelocalite();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypebien(\HTL\ImmobilierBundle\Entity\Typebien $typebien)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypebien', [$typebien]);

        return parent::setTypebien($typebien);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypebien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypebien', []);

        return parent::getTypebien();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\HTL\ImmobilierBundle\Entity\Image $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$image]);

        return parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\HTL\ImmobilierBundle\Entity\Image $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', [$image]);

        return parent::removeImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
