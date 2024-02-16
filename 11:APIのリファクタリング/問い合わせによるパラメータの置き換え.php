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
        $discountLevel = ($this->quantity > 100) ? 2 : 1;
        return $this->discountedPrice($discountLevel);
    }

    private function discountedPrice($discountLevel)
    {
        if ($discountLevel == 2) {
            return ($this->quantity * $this->itemPrice) * 0.9;
        } else {
            return ($this->quantity * $this->itemPrice) * 0.95;
        }
    }
}

$order = new Order(150, 2);
echo $order->finalPrice();
