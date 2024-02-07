<?php
class Person
{
    private $address;

    public function __construct($address)
    {
        $this->address = new Address($address);
    }

    public function getAddress()
    {
        return $this->address;
    }
}

class Address
{
    private $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function format()
    {
        return "Address: " . $this->address;
    }
}

// クライアントコード
$person = new Person("123 Main St");
echo $person->getAddress()->format();
