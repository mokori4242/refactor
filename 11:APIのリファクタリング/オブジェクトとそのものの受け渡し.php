<?php

class UserProfile
{
    public $username;
    public $email;
    public $age;

    public function __construct($username, $email, $age)
    {
        $this->username = $username;
        $this->email = $email;
        $this->age = $age;
    }
}

function createProfile(UserProfile $profile)
{
    // プロファイル作成ロジック
}

// クライアントコード
$profile = new UserProfile("john_doe", "john@example.com", 30);
createProfile($profile);
