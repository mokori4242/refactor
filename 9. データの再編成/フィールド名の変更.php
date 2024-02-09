<?php
class User
{
    public $dateOfBirth; // 名前を明確に

    public function __construct($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }
}

// クライアントコード
$user = new User("1990-01-01");
echo "Date of Birth: " . $user->dateOfBirth;

