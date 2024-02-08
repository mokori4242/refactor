<?php

$items = [100, 200, 300];

// 最初の計算でtempを使用
$temp = $items[0] * 2;
echo "最初のアイテムの2倍: " . $temp . "\n";

// 同じ変数tempを使用して、別の計算を行う
$temp = array_sum($items);

echo "アイテムの合計: " . $temp . "\n";
