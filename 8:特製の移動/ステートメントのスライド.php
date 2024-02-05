<?php


function processUser($user)
{
    $user->loadData();
    // 例: ユーザーデータの検証
    if (!$user->isValid()) {
        throw new Exception("Invalid user data");
    }
    // 例: ユーザーの年齢に基づく処理
    if ($user->age >= 18) {
        // 成人ユーザーに対する何らかの処理
    }
    $logMessage = "Processed user: " . $user->name;
    // 例: ログメッセージの加工
    $logMessage .= " (age: " . $user->age . ")";
    // 例: ユーザーデータの更新
    $user->updateLastAccessDate();
    // 最終的にログメッセージを返す
    return $logMessage;
}
