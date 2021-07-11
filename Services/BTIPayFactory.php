<?php


namespace Stev\BTIPayBundle\Services;


use Stev\BTIPay\BTIPayClient;

class BTIPayFactory
{

    protected $username;
    protected $password;
    protected $isTest;

    /**
     * BTIPay constructor.
     * @param $username
     * @param $password
     * @param $isTest
     */
    public function __construct($username, $password, $isTest)
    {
        $this->username = $username;
        $this->password = $password;
        $this->isTest = $isTest;
    }


    /**
     * @return BTIPayClient
     */
    public function initClient()
    {
        $client = new BTIPayClient($this->username, $this->password, $this->isTest);

        return $client;
    }

}