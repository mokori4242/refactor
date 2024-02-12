<?php

function calculateDiscount($order)
{
    if (!$order->customer->isVIP) {
        return $order->amount;
    }
    if ($order->amount <= 100) {
        return $order->amount;
    }
    return $order->amount * 0.8; // 20%割引
}
