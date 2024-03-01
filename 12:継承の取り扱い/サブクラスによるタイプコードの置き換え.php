<?php

abstract class Employee
{
    abstract public function calculatePay();
}

class Manager extends Employee
{
    public function calculatePay()
    {
        // マネージャーの給与計算ロジック
        return 5000;
    }
}

class Engineer extends Employee
{
    public function calculatePay()
    {
        // エンジニアの給与計算ロジック
        return 3000;
    }
}

// クライアントコード
$manager = new Manager();
echo $manager->calculatePay(); // 5000

$engineer = new Engineer();
echo $engineer->calculatePay(); // 3000
