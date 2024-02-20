<?php

class Vehicle
{
    // 共通のプロパティやメソッド
}

class Car extends Vehicle
{
    public function commonMethod()
    {
        echo '共通の振る舞い';
    }
}

class Truck extends Vehicle
{
    public function commonMethod()
    {
        echo '共通の振る舞い';
    }
}
