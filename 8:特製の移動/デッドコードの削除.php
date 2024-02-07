<?php

function calculateTotal($items)
{
    $total = 0;
    foreach ($items as $item) {
        $total += $item;
    }
    return $total;
}

// 以下の関数はどこからも呼び出されていない
function unusedFunction()
{
    echo "この関数は使われていません";
}

$items = [1, 2, 3, 4, 5];
$total = calculateTotal($items);
echo "Total: " . $total;
