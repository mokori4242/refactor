<?php

class User
{
    public $role;

    public function __construct($role)
    {
        $this->role = $role;
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}

// クライアントコード1
if ($user->isAdmin()) {
    // 管理者の場合の処理
}

// クライアントコード2
if ($user->isAdmin()) {
    // 別の場所での管理者の場合の処理
}