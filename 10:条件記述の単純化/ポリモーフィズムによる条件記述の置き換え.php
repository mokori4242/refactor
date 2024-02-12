<?php

class Bird
{
    public $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getSpeed()
    {
        switch ($this->type) {
            case "European":
                return 10;
            case "African":
                return $this->hasTailWinds ? 20 : 10;
            case "NorwegianBlue":
                return $this->isNailed ? 0 : 12;
        }
    }
}
