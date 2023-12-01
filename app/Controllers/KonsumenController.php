<?php

namespace App\Controllers;
use App\Models\KonsumenModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class KonsumenController extends BaseController
{ 

    public function index()
    {
        $model = new KonsumenModel();
        $data = [
        'konsumen' => $model->getKonsumen(),
        'title' => 'Konsumen',
    ];
        
        echo view('konsumen/index',$data);
    }

    public function create()
    {
        $model = new KonsumenModel();
        $model->insert([
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
            'password'=> $this->request->getPost('password')
        ]);

		return redirect('konsumen')->with('success', 'Data Added Successfully');	
    }
    
    public function edit($id)
    {
        $model = new KonsumenModel;
        $model->update($id, [
                'nama' => $this->request->getPost('nama'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'no_telp' => $this->request->getPost('no_telp'),
                'password'=> $this->request->getPost('password')
            ]);

            return redirect('konsumen')->with('success', 'Data Updated Successfully');
    }

    public function delete($id)
    {
        $model = new KonsumenModel;
        $model->delete($id);

        return redirect('konsumen')->with('success', 'Data Deleted Successfully');
    }

    public function export()
    {
        $konsumenModel = new KonsumenModel();
        $konsumen = $konsumenModel->findAll();

        $spreadsheet = new Spreadsheet();

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Nama')
            ->setCellValue('B1', 'Username')
            ->setCellValue('C1', 'Email')
            ->setCellValue('D1', 'No_telp')
            ->setCellValue('E1', 'Password');

        $column = 2;

        foreach ($konsumen as $user) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $user['nama'])
                ->setCellValue('B' . $column, $user['username'])
                ->setCellValue('C' . $column, $user['email'])
                ->setCellValue('D' . $column, $user['no_telp'])
                ->setCellValue('E' . $column, $user['password']);

            $column++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = date('Y-m-d-His'). '-Data-Konsumen-Sembakuy';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
