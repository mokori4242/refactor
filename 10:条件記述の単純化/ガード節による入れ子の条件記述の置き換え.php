<?php

function calculateDiscount($order)
{
    if ($order->customer->isVIP) {
        if ($order->amount > 100) {
            return $order->amount * 0.8; // 20%割引
        }
    }
    return $order->amount;
}
