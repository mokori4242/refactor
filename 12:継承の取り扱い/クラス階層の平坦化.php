<?php

class Bird
{
    public function eat()
    {
        echo "This bird eats food.";
    }

    public function fly()
    {
        echo "This bird can fly.";
    }
}

class Sparrow extends Bird
{
    public function chirp()
    {
        echo "Sparrow makes a chirping sound.";
    }
}

// クライアントコード
$sparrow = new Sparrow();
$sparrow->eat();
$sparrow->fly();
$sparrow->chirp();
