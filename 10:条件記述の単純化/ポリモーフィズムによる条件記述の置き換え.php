<?php

interface Bird
{
    public function getSpeed();
}

class European implements Bird
{
    public function getSpeed()
    {
        return 10;
    }
}

class African implements Bird
{
    public function getSpeed()
    {
        return $this->hasTailWinds ? 20 : 10;
    }
}

class NorwegianBlue implements Bird
{
    public function getSpeed()
    {
        return $this->isNailed ? 0 : 12;
    }
}

// クライアントコード
function getBirdSpeed(Bird $bird)
{
    return $bird->getSpeed();
}

$bird = new European();
echo getBirdSpeed($bird);
