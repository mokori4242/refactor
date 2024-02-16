<?php

class Order
{
    protected $quantity;
    protected $itemPrice;

    public function __construct($quantity, $itemPrice)
    {
        $this->quantity = $quantity;
        $this->itemPrice = $itemPrice;
    }

    public function finalPrice()
    {
        return $this->discountedPrice();
    }

    public function getDiscountLevel()
    {
        return ($this->quantity > 100) ? 2 : 1;
    }

    private function discountedPrice()
    {
        if ($this->getDiscountLevel() == 2) {
            return ($this->quantity * $this->itemPrice) * 0.9;
        } else {
            return ($this->quantity * $this->itemPrice) * 0.95;
        }
    }
}

$order = new Order(150, 2);
echo $order->finalPrice();
