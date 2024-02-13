<?php

function getCustomerName($customer)
{
    if ($customer == null) {
        return "Unknown";
    }
    return $customer->getName();
}
