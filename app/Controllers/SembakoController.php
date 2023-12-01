<?php

namespace App\Controllers;
use App\Models\SembakoModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class SembakoController extends BaseController
{ 

    public function index()
    {
        $model = new SembakoModel();
        $data = [
        'sembako' => $model->getSembako(),
        'title' => 'Sembako',
    ];
        
        echo view('sembako/index',$data);
    }

    public function create()
    {
        $model = new SembakoModel();
        $model->insert([
            'nama' => $this->request->getPost('nama'),
            'jenis' => $this->request->getPost('jenis'),
            'produksi' => $this->request->getPost('produksi'),
            'stok' => $this->request->getPost('stok'),
            'harga'=> $this->request->getPost('harga'),
            'domisili'=> $this->request->getPost('domisili')
        ]);

		return redirect('sembako')->with('success', 'Data Added Successfully');	
    }
    
    public function edit($id)
    {
        $model = new SembakoModel;
        $model->update($id, [
                'nama' => $this->request->getPost('nama'),
                'jenis' => $this->request->getPost('jenis'),
                'produksi' => $this->request->getPost('produksi'),
                'stok' => $this->request->getPost('stok'),
                'harga'=> $this->request->getPost('harga'),
                'domisili'=> $this->request->getPost('domisili')
            ]);

            return redirect('sembako')->with('success', 'Data Updated Successfully');
    }

    public function delete($id)
    {
        $model = new SembakoModel;
        $model->delete($id);

        return redirect('sembako')->with('success', 'Data Deleted Successfully');
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
        $filename = date('Y-m-d-His'). '-Data-Sembako-Sembakuy';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
