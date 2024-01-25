<?php
class Person
{
    private $department;

    public function __construct(Department $department)
    {
        $this->department = $department;
    }

    public function getManager()
    {
        return $this->department->getManager();
    }
}

class Department
{
    private $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    public function getManager()
    {
        return $this->manager;
    }
}

//client
$person = new Person();
$manager = $person->getManager();
