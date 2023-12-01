<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SembakoModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excels extends BaseController
{
    public function basic()
    {
        $data = [
            "title"=> "Export Excel",
        ];
        echo view('excels', $data);

    }
    public function export()
    {
        $sembakoModel = new SembakoModel();
        $pangan = $sembakoModel->findAll();

        $spreadsheet = new Spreadsheet();

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama')
            ->setCellValue('B1', 'Jenis')
            ->setCellValue('C1', 'Produksi')
            ->setCellValue('D1', 'Stok')
            ->setCellValue('E1', 'Harga')
            ->setCellValue('F1', 'Domisili');


        $column = 2;

        foreach ($pangan as $user) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $user['nama'])
                ->setCellValue('B' . $column, $user['jenis'])
                ->setCellValue('C' . $column, $user['produksi'])
                ->setCellValue('D' . $column, $user['stok'])
                ->setCellValue('E' . $column, $user['harga'])
                ->setCellValue('F' . $column, $user['domisili']);

            $column++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = date('Y-m-d-His'). '-Data-User';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
