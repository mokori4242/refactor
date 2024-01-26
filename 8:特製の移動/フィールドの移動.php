<?php

class Customer
{
    private $name;
    private $discountRate;
    private $contract;

    public function __construct($name, $discountRate)
    {
        $this->name = $name;
        $this->discountRate = $discountRate;
        $this->contract = new CustomerContract(date("Y-m-d"));
    }

    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    // その他のメソッド
}

class CustomerContract
{
    private $startDate;

    public function __construct($startDate)
    {
        $this->startDate = $startDate;
    }

    // その他のメソッド
}
