<?php
class StringProcessor
{
    public function countLetter($string, $letter)
    {
        return substr_count($string, $letter);
    }
}

// クライアントコード
$processor = new StringProcessor();
echo $processor->countLetter("hello world", "l");
