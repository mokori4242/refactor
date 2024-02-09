<?php

class Customer
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$customer1 = new Customer(1, "Alice");
$order1 = new Order($customer1);

$customer2 = new Customer(1, "Alice");
$order2 = new Order($customer2);
