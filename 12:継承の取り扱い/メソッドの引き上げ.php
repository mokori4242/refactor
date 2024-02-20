<?php

class Vehicle
{
    public function commonMethod()
    {
        echo '共通の振る舞い';
    }
}

class Car extends Vehicle
{
    // 特有のプロパティやメソッド
}

class Truck extends Vehicle
{
    // 特有のプロパティやメソッド
}

// クライアントコード
$car = new Car();
$car->commonMethod(); // "共通の振る舞い" を出力

$truck = new Truck();
$truck->commonMethod(); // "共通の振る舞い" を出力
