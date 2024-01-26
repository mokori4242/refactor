<?php

class Customer
{
    private $name;
    private $contract;

    public function __construct($name, $discountRate)
    {
        $this->name = $name;
        $this->contract = new CustomerContract(date("Y-m-d"), $discountRate);
    }

    public function getDiscountRate()
    {
        return $this->contract->getDiscountRate();
    }

    // その他のメソッド
}

class CustomerContract
{
    private $startDate;
    private $discountRate;

    public function __construct($startDate, $discountRate)
    {
        $this->startDate = $startDate;
        $this->discountRate = $discountRate;
    }

    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    // その他のメソッド
}
