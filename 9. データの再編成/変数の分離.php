<?php

$items = [100, 200, 300];

// 最初の計算用の変数
$firstItemDoubled = $items[0] * 2;
echo "最初のアイテムの2倍: " . $firstItemDoubled . "\n";

// 合計計算用の変数
$totalItems = array_sum($items);

echo "アイテムの合計: " . $totalItems . "\n";
