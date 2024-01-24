<?php

class Order
{
    private $quantity;
    private $itemPrice;

    public function __construct($quantity, $itemPrice)
    {
        $this-> quantity = $quantity;
        $this-> itemPrice = $itemPrice;
    }

    public function calculateTotal()
    {
        $basePrice = $this-> quantity * $this-> itemPrice;
        if ($basePrice > 1000) {
            return $basePrice * 0.95;
        } else {
            return $basePrice * 0.98;
        }
    }
}
