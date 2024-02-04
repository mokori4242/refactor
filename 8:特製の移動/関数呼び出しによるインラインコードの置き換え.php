<?php
class User
{
    public $role;

    public function __construct($role)
    {
        $this->role = $role;
    }
}

// クライアントコード1
if ($user->role === 'admin') {
    // 管理者の場合の処理
}

// クライアントコード2
if ($user->role === 'admin') {
    // 別の場所での管理者の場合の処理
}
