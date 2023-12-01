<?php

namespace App\Controllers;
use App\Models\PenjualModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class PenjualController extends BaseController
{ 

    public function index()
    {
        $model = new PenjualModel();
        $data = [
        'penjual' => $model->getPenjual(),
        'title' => 'Penjual',
    ];
        
        echo view('penjual/index',$data);
    }

    public function create()
    {
        $model = new PenjualModel();
        $model->insert([
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
            'password'=> $this->request->getPost('password')
        ]);

		return redirect('penjual')->with('success', 'Data Added Successfully');	
    }
    
    public function edit($id)
    {
        $model = new PenjualModel;
        $model->update($id, [
                'nama' => $this->request->getPost('nama'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'no_telp' => $this->request->getPost('no_telp'),
                'password'=> $this->request->getPost('password')
            ]);

            return redirect('penjual')->with('success', 'Data Updated Successfully');
    }

    public function delete($id)
    {
        $model = new PenjualModel;
        $model->delete($id);

        return redirect('penjual')->with('success', 'Data Deleted Successfully');
    }

    public function export()
    {
        $penjualModel = new PenjualModel();
        $penjual = $penjualModel->findAll();

        $spreadsheet = new Spreadsheet();

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama')
            ->setCellValue('B1', 'Username')
            ->setCellValue('C1', 'Email')
            ->setCellValue('D1', 'No_telp')
            ->setCellValue('E1', 'Password');

        $column = 2;

        foreach ($penjual as $user) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $user['nama'])
                ->setCellValue('B' . $column, $user['username'])
                ->setCellValue('C' . $column, $user['email'])
                ->setCellValue('D' . $column, $user['no_telp'])
                ->setCellValue('E' . $column, $user['password']);

            $column++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = date('Y-m-d-His'). '-Data-Penjual-Sembakuy';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
