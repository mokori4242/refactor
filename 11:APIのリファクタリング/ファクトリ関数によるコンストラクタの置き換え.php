<?php

class Employee
{
    private $name;
    private $type;

    private function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public static function createEngineer($name)
    {
        return new Employee($name, 'Engineer');
    }

    public static function createSalesman($name)
    {
        return new Employee($name, 'Salesman');
    }

    // nameとtypeのゲッターメソッドは省略
}

// クライアントコード
$engineer = Employee::createEngineer("Mike");
$salesman = Employee::createSalesman("Vince");
