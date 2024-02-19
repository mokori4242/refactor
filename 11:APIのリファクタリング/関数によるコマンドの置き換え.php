<?php

interface Command
{
    public function execute();
}

class GreetCommand implements Command
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function execute()
    {
        echo "Hello, " . $this->name;
    }
}

// クライアントコード
$command = new GreetCommand("John");
$command->execute();
