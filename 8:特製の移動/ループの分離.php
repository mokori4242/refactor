<?php

$totalPrice = 0;
foreach ($products as $product) {
    $totalPrice += $product["price"];
}

$outOfStock = [];
foreach ($products as $product) {
    if (!$product["inStock"]) {
        $outOfStock[] = $product["name"];
    }
}
