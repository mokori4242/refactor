<?php

class User
{
    public $d; // 誕生日を表すが、名前が不明瞭

    public function __construct($dob)
    {
        $this->d = $dob;
    }
}

// クライアントコード
$user = new User("1990-01-01");
echo "Date of Birth: " . $user->d;
