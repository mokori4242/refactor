<?php

class Employee
{
    const MANAGER = 0;
    const ENGINEER = 1;
    private $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function calculatePay()
    {
        switch ($this->type) {
            case self::MANAGER:
                return $this->calculateManagerPay();
                break;
            case self::ENGINEER:
                return $this->calculateEngineerPay();
                break;
            default:
                throw new Exception("Invalid employee type");
        }
    }

    private function calculateManagerPay()
    {
        // マネージャーの給与計算ロジック
        return 5000;
    }

    private function calculateEngineerPay()
    {
        // エンジニアの給与計算ロジック
        return 3000;
    }
}

// クライアントコード
$manager = new Employee(Employee::MANAGER);
echo $manager->calculatePay(); // 5000

$engineer = new Employee(Employee::ENGINEER);
echo $engineer->calculatePay(); // 3000
