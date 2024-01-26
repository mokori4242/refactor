<?php
// 翻訳とコードがわかりづらすぎたので(とりあえず)ここだけ普段使いのPHPで…
class Order
{
    private $products = [];

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }

    // 任意で、特定のプロダクトを取り除くメソッドを追加することもできます
    public function removeProduct($product)
    {
        $this->products = array_filter($this->products, function($p) use ($product) {
            return $p !== $product;
        });
    }
}

// 使用例
$order = new Order();
$order->addProduct("Apple");
$order->addProduct("Banana");
$products = $order->getProducts();

