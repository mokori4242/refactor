<?php

interface Command
{
    public function execute();
}

class SaveToDatabaseCommand implements Command
{
    private $userData;

    public function __construct($userData)
    {
        $this->userData = $userData;
    }

    public function execute()
    {
        // データベースへの保存ロジック
    }
}

class SendWelcomeEmailCommand implements Command
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function execute()
    {
        // メール送信ロジック
    }
}

class LogRegistrationCommand implements Command
{
    private $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function execute()
    {
        // 登録ログロジック
    }
}

class UserRegistration
{
    private $commands;

    public function __construct()
    {
        $this->commands = [];
    }

    public function addCommand(Command $command)
    {
        $this->commands[] = $command;
    }

    public function registerUser($userData)
    {
        $this->addCommand(new SaveToDatabaseCommand($userData));
        $this->addCommand(new SendWelcomeEmailCommand($userData['email']));
        $this->addCommand(new LogRegistrationCommand($userData['username']));

        foreach ($this->commands as $command) {
            $command->execute();
        }
    }
}

