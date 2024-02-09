<?php
class CustomerRepository
{
    private $customers = [];

    public function getCustomer($id, $name)
    {
        if (!isset($this->customers[$id])) {
            $this->customers[$id] = new Customer($id, $name);
        }
        return $this->customers[$id];
    }
}

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

$repository = new CustomerRepository();
$customer1 = $repository->getCustomer(1, "Alice");
$order1 = new Order($customer1);

$customer2 = $repository->getCustomer(1, "Alice");
$order2 = new Order($customer2);
