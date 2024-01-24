<?php
class Person
{
    private $name;
    private $address; // Address クラスのインスタンス

    public function __construct($name, Address $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }
}

class Address

{
    private $streetAddress;
    private $city;
    private $postalCode;

    public function __construct($streetAddress, $city, $postalCode)
    {
        $this->streetAddress = $streetAddress;
        $this->city = $city;
        $this->postalCode = $postalCode;
    }

    // ゲッター
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
