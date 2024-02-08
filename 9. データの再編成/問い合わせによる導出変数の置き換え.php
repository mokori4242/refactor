<?php

class Cart
{
    private $items = [];
    public $totalPrice = 0;

    public function addItem($item)
    {
        $this->items[] = $item;
        $this->totalPrice += $item->price;
    }
}
