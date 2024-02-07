<?php

$numbers = [1, 2, 3, 4, 5];

// 各数字を2倍にして、偶数のみを抽出し、その合計を計算する
$total = array_reduce(
    array_filter(
        array_map(function ($n) { return $n * 2; }, $numbers),
        function ($n) { return $n % 2 === 0; }
    ),
    function ($carry, $n) { return $carry + $n; },
    0
);

echo $total; // 出力: 30(2 + 4 + 6 + 8 + 10)
