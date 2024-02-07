<?php

$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = []; // 数値を2倍にした結果を格納する配列
$evenNumbers = []; // 偶数のみを格納する配列
$total = 0; // 偶数の合計値

// まず、各数値を2倍にする
foreach ($numbers as $number) {
    $doubledNumbers[] = $number * 2;
}

// 次に、2倍にした数値の中から偶数のみを抽出する
foreach ($doubledNumbers as $doubledNumber) {
    if ($doubledNumber % 2 === 0) {
        $evenNumbers[] = $doubledNumber;
    }
}

// 最後に、偶数の合計を計算する
foreach ($evenNumbers as $evenNumber) {
    $total += $evenNumber;
}

echo $total; // 出力: 20 (4 + 8 + 8)
