<?php

class Customer
{
    // ...

    public function createBill($date)
    {
        // 請求処理のロジック
        // ...

        // 通知の送信
        $this->sendBillNotification();
    }

    private function sendBillNotification()
    {
        // 通知の送信に関するロジック
    }
}

// クライアントコード
$customer = new Customer();
$customer->createBill($billingDate);

