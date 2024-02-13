<?php

function calculateDiscount($customer)
{
    // 割引率の計算
    $discount = 0.0;

    // 特定の顧客に対する割引率の計算
    if ($customer->years > 5) {
        $discount = 0.1; // 10%割引
    }
    return $discount;
}
