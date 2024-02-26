<?php

// 統合されたクラス
class Employee
{
    protected $name;
    protected $type;


    public function __construct($name, $type = 'employee')
    {
        $this->name = $name;
        $this->type = $type;
    }


    public function calculatePay()
    {
        if ($this->type === 'manager') {
            return "Manager Pay";
        }
        return "Base Pay";
    }
}

// クライアントコード
$employee = new Employee("John", 'manager');
echo $employee->calculatePay(); // Manager Pay
