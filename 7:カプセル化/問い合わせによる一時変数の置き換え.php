<?php
class Order
{
    private $quantity;
    private $itemPrice;

    public function __construct($quantity, $itemPrice)
    {
        $this->quantity = $quantity;
        $this->itemPrice = $itemPrice;
    }

    private function getBasePrice()
    {
        return $this->quantity * $this->itemPrice;
    }

    public function calculateTotal()
    {
        if ($this->getBasePrice() > 1000) {
            return $this->getBasePrice() * 0.95;
        } else {
            return $this->getBasePrice() * 0.98;
        }
    }
}
