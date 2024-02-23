<?php

class Vehicle
{
    public function specificMethod()
    {
        echo "This method is only used by Car.";
    }
}

class Car extends Vehicle
{
    // Car-specific behaviors
}

class Truck extends Vehicle
{
    // Truck-specific behaviors
}

class Truck extends Vehicle
{
    // Truck-specific behaviors
}
