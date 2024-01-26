<?php

class Person
{
    private $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function formatAddress()
    {
        return "Address: " . $this->address;
    }
}

// クライアントコード
$person = new Person("123 Main St");
echo $person->formatAddress();
