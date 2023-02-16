<?php

use lib\Signature;

class Xerof
{
    /* @var string $secret */
    private $secret;

    /* @var Signature $signature */
    public $signature;


    public function __construct($secret)
    {
        $this->signature = new Signature();
        $this->setSecret($secret);
    }


    /**
    * @return string
    */
    public function getSecret()
    {
        return $this->secret;
    }


    private function setSecret($secret)
    {
        $this->secret = $secret;
    }
}