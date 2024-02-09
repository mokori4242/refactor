<?php

class Color
{
    private $red;
    private $green;
    private $blue;

    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public function equals(Color $other)
    {
        return $this->red === $other->red
            && $this->green === $other->green
            && $this->blue === $other->blue;
    }
}

$color1 = new Color(255, 255, 255);
$color2 = new Color(255, 255, 255);

if ($color1->equals($color2)) {
    echo "Color1 and Color2 are equal.";
} else {
    echo "Color1 and Color2 are not equal.";
}
