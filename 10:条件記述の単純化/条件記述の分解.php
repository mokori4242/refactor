<?php

function calculateDiscount($customerLoyaltyYears, $purchaseAmount)
{
    if ($customerLoyaltyYears > 5 && $purchaseAmount > 1000) {
        return $purchaseAmount * 0.1; // 10%の割引
    } else {
        return $purchaseAmount * 0.05; // 5%の割引
    }
}
