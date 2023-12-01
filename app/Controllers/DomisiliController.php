<?php

namespace App\Controllers;
use App\Models\DomisiliModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class DomisiliController extends BaseController
{ 

    public function index()
    {
        $model = new DomisiliModel();
        $data = [
        'domisili' => $model->getDomisili(),
        'title' => 'Domisili',
    ];
        
        echo view('domisili/index',$data);
    }

    public function create()
    {
        $model = new DomisiliModel();
        $model->insert([
            'provinsi' => $this->request->getPost('provinsi'),
            'kota' => $this->request->getPost('kota'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'RW'=> $this->request->getPost('RW'),
            'RT'=> $this->request->getPost('RT')
        ]);

		return redirect('domisili')->with('success', 'Data Added Successfully');	
    }
    
    public function edit($id)
    {
        $model = new DomisiliModel;
        $model->update($id, [
                'provinsi' => $this->request->getPost('provinsi'),
                'kota' => $this->request->getPost('kota'),
                'kecamatan' => $this->request->getPost('kecamatan'),
                'kelurahan' => $this->request->getPost('kelurahan'),
                'RW'=> $this->request->getPost('RW'),
                'RT'=> $this->request->getPost('RT')
            ]);

            return redirect('domisili')->with('success', 'Data Updated Successfully');
    }

    public function delete($id)
    {
        $model = new DomisiliModel;
        $model->delete($id);

        return redirect('domisili')->with('success', 'Data Deleted Successfully');
    }
    public function export()
    {
        $domisiliModel = new DomisiliModel();
        $domisili = $domisiliModel->findAll();

        $spreadsheet = new Spreadsheet();

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Provinsi')
            ->setCellValue('B1', 'Kota')
            ->setCellValue('C1', 'Kecamatan')
            ->setCellValue('D1', 'Kelurahan')
            ->setCellValue('E1', 'RW')
            ->setCellValue('F1', 'RT');


        $column = 2;

        foreach ($domisili as $user) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $user['provinsi'])
                ->setCellValue('B' . $column, $user['kota'])
                ->setCellValue('C' . $column, $user['kecamatan'])
                ->setCellValue('D' . $column, $user['kelurahan'])
                ->setCellValue('E' . $column, $user['RW'])
                ->setCellValue('F' . $column, $user['RT']);

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
