<?php

class Vehicle
{
    // Common behaviors for all vehicles
}

class Car extends Vehicle
{
    protected $manufacturer;
    // Car-specific behaviors
}

class Truck extends Vehicle
{
    // Truck-specific behaviors remain unchanged
}

// クライアントコード
$car = new Car();
$car->manufacturer = "Toyota"; // これはCarクラスに定義されています。

$truck = new Truck();
// $truck->manufacturer = "Ford"; // Truckクラスでは`manufacturer`フィールドは定義されていません。

