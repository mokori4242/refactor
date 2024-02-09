<?php

class Cart
{
    private $items = [];

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item->price;
        }
        return $totalPrice;
    }
}

// クライアントコード
$cart = new Cart();
$cart->addItem(new Item("Apple", 100));
$cart->addItem(new Item("Banana", 50));
echo "Total Price: " . $cart->getTotalPrice();
