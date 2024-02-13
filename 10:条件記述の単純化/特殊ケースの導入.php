<?php

class Customer
{
    public function getName()
    {
        return $this->name;
    }
}

class UnknownCustomer extends Customer
{
    public function getName()
    {
        return "Unknown";
    }
}

function getCustomerName($customer)
{
    return $customer->getName();
}

function getCustomer($id)
{
    $customer = CustomerRepository::findById($id);
    if ($customer == null) {
        return new UnknownCustomer();
    }
    return $customer;
}

//　クライアントコード
$customer = getCustomer($id);
echo getCustomerName($customer);
