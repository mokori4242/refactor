<?php
class Customer
{
    // ...

    public function createBill($date)
    {
        // 請求処理のロジックのみ
        // ...
    }

    public function sendBillNotification()
    {
        // 通知の送信に関するロジック
    }
}

// クライアントコード
$customer = new Customer();
$customer->createBill($billingDate);

// 通知が必要な場合のみ呼び出し
if ($needToSendNotification) {
    $customer->sendBillNotification();
}


