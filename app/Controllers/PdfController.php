<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use App\Controllers\BaseController;

class PdfController extends Controller
{
    public function index()
    {
        return view('pdf_view');
    }

    public function generate()
    {
        
        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('sembako/index'));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
