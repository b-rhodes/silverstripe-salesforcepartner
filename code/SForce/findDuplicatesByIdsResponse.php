<?php

namespace SForce\Wsdl;

class findDuplicatesByIdsResponse
{

    /**
     * @var FindDuplicatesResult $result
     */
    protected $result = null;

    /**
     * @param FindDuplicatesResult $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return FindDuplicatesResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param FindDuplicatesResult $result
     * @return \SForce\Wsdl\findDuplicatesByIdsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
