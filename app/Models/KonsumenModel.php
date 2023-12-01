<?php

namespace App\Models;

use CodeIgniter\Model;

class KonsumenModel extends Model
{
    protected $table            = 'konsumen';
    protected $primaryKey       = 'id_konsumen';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama',
        'username',
        'email',
        'no_telp',
        'password',
        'created_at',
        'last_login'
    ];
    public function getKonsumen($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_konsumen' => $id]);
        }   
    }
}