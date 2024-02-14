<?php

$finalAmount = isTenPercentDiscount($customerLoyaltyYears, $purchaseAmount)
    ? applyTenPercentDiscount($purchaseAmount)
    : applyFivePercentDiscount($purchaseAmount);

function isTenPercentDiscount($customerLoyaltyYears, $purchaseAmount)
{
    return $customerLoyaltyYears > 5 && $purchaseAmount > 1000;
}

function applyFivePercentDiscount($purchaseAmount)
{
    return $purchaseAmount * 0.05;
}

function applyTenPercentDiscount($purchaseAmount)
{
    return $purchaseAmount * 0.1;
}
