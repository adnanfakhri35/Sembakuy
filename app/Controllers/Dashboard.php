<?php

namespace App\Controllers;

class Dashboard extends BaseController{
    public function index(){
        $data = [
            "title"=> "Dashboard",
        ];
        echo view("dashboard", $data);
    }
}