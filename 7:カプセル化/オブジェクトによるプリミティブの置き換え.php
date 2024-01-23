<?php
class Person
{
    public $phoneNumber; // 電話番号を単なる文字列として保持

    public function __construct($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    // ...
}

// 電話番号を直接文字列として扱う
$person = new Person("123-456-7890");

// 電話番号を取得
echo $person->phoneNumber;
