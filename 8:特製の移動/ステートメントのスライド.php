<?php

function processUser($user)
{
    $user->loadData();
    // ユーザーデータの検証
    if (!$user->isValid()) {
        throw new Exception("Invalid user data");
    }
    // ユーザーの年齢に基づく処理
    if ($user->age >= 18) {
        // 成人ユーザーに対する何らかの処理
    }
    // ユーザーデータの更新
    $user->updateLastAccessDate();
    // ログメッセージの生成と加工
    $logMessage = "Processed user: " . $user->name . " (age: " . $user->age . ")";
    // 最終的にログメッセージを返す
    return $logMessage;
}
