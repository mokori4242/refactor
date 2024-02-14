<?php

function calculateDiscount($customer)
{
    // アサーション: 顧客の年数は負の数であってはならない
    assert($customer->years >= 0, 'Customer years must not be negative.');

    // 割引率の計算
    $discount = 0.0;

    // 特定の顧客に対する割引率の計算
    if ($customer->years > 5) {
        $discount = 0.1; // 10%割引
    }
    return $discount;
}

// クライアントコード
$customer = new Customer();
$customer->years = 6;
echo calculateDiscount($customer); // アサーションを満たす場合、割引率を計算
