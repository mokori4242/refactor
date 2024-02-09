<?php

class Color
{
    public $red;
    public $green;
    public $blue;

    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }
}

$color1 = new Color(255, 255, 255);
$color2 = $color1;
$color2->red = 128; // $color1も変更される
