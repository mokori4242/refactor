<?php

class Vehicle
{
    // Common behaviors for all vehicles
}


class Car extends Vehicle
{
    public function specificMethod()
    {
        echo "This method is only used by Car.";
    }

}

class Truck extends Vehicle
{
    // Truck-specific behaviors remain unchanged
}

// クライアントコード
$car = new Car();
$car->specificMethod(); // 正常に動作

$truck = new Truck();
// $truck->specificMethod(); これはもはや存在しないため、エラーとなる
