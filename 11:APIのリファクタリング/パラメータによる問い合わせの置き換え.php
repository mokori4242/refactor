<?php

class User
{
    private $location;

    public function __construct($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }
}

class ReportGenerator
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function generateReport()
    {
        $location = $this->user->getLocation();
        // レポート生成ロジック...
    }
}
