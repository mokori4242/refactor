<?php

function registerUser($userData)
{
    saveToDatabase($userData);
    sendWelcomeEmail($userData['email']);
    logRegistration($userData['username']);
}

function saveToDatabase($userData)
{
    // データベースへの保存ロジック
}

function sendWelcomeEmail($email)
{
    // メール送信ロジック
}

function logRegistration($username)
{
    // 登録ログロジック
}
