<?php

class Employee
{
    private $name;
    private $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    // nameとtypeのゲッターメソッドは省略
}

// クライアントコード
$employee = new Employee("Coffee", "Beverage");
