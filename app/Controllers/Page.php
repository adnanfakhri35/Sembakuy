<?php namespace App\Controllers;

class Page extends BaseController {
    public function tentangKami(){
        $data = [
            'title' => 'Tentang kami',
            'style' => 'styleTentang'
        ];
        echo view("pages/tentangKami", $data);
    }

    public function home(){
        $data = [
            'title' => 'Home',
            'style' => 'StyleHome'
        ];
        echo view("pages/home", $data);
    }

    public function bantuan(){
        $data = [
            'title' => 'Bantuan',
            'style' => 'styleBantuan'
        ];
        echo view("pages/bantuan", $data);
    }

    public function login(){
        $data = [
            'title' => 'Home',
            'style' => 'styleHome'
        ];
        echo view("pages/homeAfterLogin", $data);
    }

    public function peta(){
        $data = [
            'title' => 'Peta',
            'style' => 'stylePeta'
        ];
        echo view('pages/peta', $data);
    }

    public function cari(){
        $data = [
            'title' => 'Cari',
            'style' => 'styleCari'
        ];
        echo view('pages/cari', $data);
    }

    public function detailPasar(){
        $data = [
            'title' => 'Pasar',
            'style' => 'styleSembakoPasarAnyar'
        ];
        echo view('pages/detailPasar', $data);
    }

}

