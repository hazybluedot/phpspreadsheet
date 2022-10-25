<?php

namespace PhpOffice\PhpSpreadsheetTests\Reader\Xlsx;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PHPUnit\Framework\TestCase;

class EmptyChartTest extends TestCase
{
    public function testLoadChartSheetWithEmptyChart(): void
    {
        $filename = 'tests/data/Reader/XLSX/EmptyChart.xlsx';
        $reader = new Xlsx();
        $reader->setIncludeCharts(true);
        $spreadsheet = $reader->load($filename);

        self::assertCount(1, $spreadsheet->getAllSheets());
    }
}