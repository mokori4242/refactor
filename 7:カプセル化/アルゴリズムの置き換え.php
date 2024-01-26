<?php

class StringProcessor
{
    public function countLetter($string, $letter)
    {
        $count = 0;
        for ($i = 0; $i < strlen($string); $i++) {
            if ($string[$i] === $letter) {
                $count++;
            }
        }
        return $count;
    }
}

// クライアントコード
$processor = new StringProcessor();
echo $processor->countLetter("hello world", "l");
