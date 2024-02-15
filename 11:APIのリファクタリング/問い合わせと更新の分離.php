<?php

class ReportGenerator
{
    public function processData($data)
    {
        // データ加工のロジック
        // ここでデータを変更するが、このメソッドの主な目的はデータの更新である
    }

    public function generateReport($data)
    {
        // レポートの生成と値の返却のみを行う
        // ここではデータの加工（更新）は行わない
        return $this->createReport($data);
    }

    private function createReport($data)
    {
        // レポート生成のロジック
        // 生成したレポートを返す
        return $report;
    }
}

// クライアントコードでは、データの加工が必要な場合には、
// processData を明示的に呼び出し、その後に generateReport を呼び出す
$reportGenerator = new ReportGenerator();
$reportGenerator->processData($data); // 明示的なデータの加工（更新）
$report = $reportGenerator->generateReport($data); // レポートの生成と返却
