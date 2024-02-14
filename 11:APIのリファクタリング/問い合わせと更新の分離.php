<?php

class ReportGenerator
{
    public function generateReport($data)
    {
        // レポートデータの加工
        $processedData = $this->processData($data);
        // 加工したデータをもとにレポートを生成し、その結果を返す
        return $this->createReport($processedData);
    }

    private function processData($data)
    {
        // データ加工のロジック
        // ここでデータを変更
        return $processedData;
    }

    private function createReport($data)
    {
        // レポート生成のロジック
        // 生成したレポートを返す
        return $report;
    }
}
