<?php

class Vehicle
{
    protected $manufacturer;
}

class Car extends Vehicle
{
}

class Truck extends Vehicle
{
}

// クライアントコード
$car = new Car();
$car->manufacturer = "Toyota";

$truck = new Truck();
$truck->manufacturer = "Ford";
