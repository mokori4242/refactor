<?php

class Person
{
    private $name;
    private $contactInfo; // ContactInfo クラスのインスタンス

    public function __construct($name, ContactInfo $contactInfo)
    {
        $this->name = $name;
        $this->contactInfo = $contactInfo;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getContactInfo()
    {
        return $this->contactInfo;
    }
}

class ContactInfo
{
    private $email;
    private $phoneNumber;

    public function __construct($email, $phoneNumber)
    {
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}
