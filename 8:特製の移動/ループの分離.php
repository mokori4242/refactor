<?php

$products = [
    ["name" => "商品A", "price" => 1000, "inStock" => true],
    ["name" => "商品B", "price" => 2000, "inStock" => false],
    // その他の商品...
];

$totalPrice = 0;
$outOfStock = [];

foreach ($products as $product) {
    $totalPrice += $product["price"];
    if (!$product["inStock"]) {
        $outOfStock[] = $product["name"];
    }
}
