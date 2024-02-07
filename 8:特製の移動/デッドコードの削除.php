<?php


function calculateTotal($items)
{
    $total = 0;
    foreach ($items as $item) {
        $total += $item;
    }
    return $total;
}

$items = [1, 2, 3, 4, 5];
$total = calculateTotal($items);
echo "Total: " . $total;