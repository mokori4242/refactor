<?php

function generateReport($type, $data)
{
    return $type . 'Report:' . $data;
}

// クライアントコード
echo generateReport('Sales', $data);
echo generateReport('Employee', $data);
