<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualModel extends Model
{
    protected $table            = 'penjual';
    protected $primaryKey       = 'id_penjual';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama',
        'username',
        'email',
        'no_telp',
        'password'
    ];
    public function getPenjual($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_penjual' => $id]);
        }   
    }
}