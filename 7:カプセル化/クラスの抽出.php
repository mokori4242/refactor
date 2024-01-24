<?php

class Person
{
    private $name;
    private $streetAddress;
    private $city;
    private $postalCode;

    public function __construct($name, $streetAddress, $city, $postalCode)
    {
        $this->name = $name;
        $this->streetAddress = $streetAddress;
        $this->city = $city;
        $this->postalCode = $postalCode;
    }

    // ゲッターとセッター
    public function getName()
    {
        return $this->name;
    }

    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }
}
