<?php

namespace SForce\Wsdl;

class InvalidateSessionsResult
{
    /**
     * @var Error[]
     */
    protected $errors = null;

    /**
     * @var boolean
     */
    protected $success = null;

    /**
     * @param boolean $success
     */
    public function __construct($success = null)
    {
        $this->success = $success;
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param Error[] $errors
     * @return \SForce\Wsdl\InvalidateSessionsResult
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param boolean $success
     * @return \SForce\Wsdl\InvalidateSessionsResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }
}
