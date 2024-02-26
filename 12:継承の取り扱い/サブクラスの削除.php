<?php

// 親クラス
class Employee
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function calculatePay()
    {
        return "Base Pay";
    }
}

// サブクラス
class Manager extends Employee
{
    public function calculatePay()
    {
        return "Manager Pay";
    }
}

// クライアントコード
$manager = new Manager("John");
echo $manager->calculatePay(); // Manager Pay
