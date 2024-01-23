<?php

class PhoneNumber
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    // 電話番号のフォーマットを行うメソッド
    public function format()
    {
        // 電話番号を特定のフォーマットに整形するロジック
        return str_replace("-", "", $this->number);
    }

    // その他の電話番号に関連するメソッド
}

class Person
{
    private $phoneNumber; // PhoneNumberオブジェクトに置き換え

    public function __construct(PhoneNumber $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getFormattedPhoneNumber()
    {
        return $this->phoneNumber->format();
    }

    // ...
}


// PhoneNumberオブジェクトを作成し、それをPersonに渡す
$phoneNumber = new PhoneNumber("123-456-7890");
$person = new Person($phoneNumber);

// フォーマットされた電話番号を取得
echo $person->getFormattedPhoneNumber();
