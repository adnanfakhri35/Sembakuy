<?php

namespace App\Models;

use CodeIgniter\Model;

class SembakoModel extends Model
{
    protected $table            = 'pangan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama',
        'jenis',
        'produksi',
        'stok',
        'harga',
        'domisili'
    ];
    public function getSembako($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
}