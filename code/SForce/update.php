<?php

namespace SForce\Wsdl;

class update
{
    /**
     * @var sObject
     */
    protected $sObjects = null;

    /**
     * @param sObject $sObjects
     */
    public function __construct($sObjects = null)
    {
        $this->sObjects = $sObjects;
    }

    /**
     * @return sObject
     */
    public function getSObjects()
    {
        return $this->sObjects;
    }

    /**
     * @param sObject $sObjects
     * @return \SForce\Wsdl\update
     */
    public function setSObjects($sObjects)
    {
        $this->sObjects = $sObjects;
        return $this;
    }
}
