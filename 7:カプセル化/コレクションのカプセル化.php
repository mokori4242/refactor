<?php
// 翻訳とコードがわかりづらすぎたので(とりあえず)ここだけ普段使いのPHPで…
class Order
{
    public $products = [];

    public function addProduct($product)
    {
        $this->products[] = $product;
    }
}

// 使用例
$order = new Order();
$order->products[] = "Apple";
$order->products[] = "Banana";

