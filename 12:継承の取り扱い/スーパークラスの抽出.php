<?php


// 新しいスーパークラスPersonを抽出
class Person
{
    protected $name;
    protected $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }
}

// EmployeeとManagerはPersonを継承する
class Employee extends Person
{
    // Employee固有の機能
}

class Manager extends Person
{
    // Manager固有の機能
}

// クライアントコード例
$employee = new Employee("John Doe", "john@example.com");
echo $employee->getName(); // John Doe

$manager = new Manager("Jane Doe", "jane@example.com");
echo $manager->getName(); // Jane Doe

