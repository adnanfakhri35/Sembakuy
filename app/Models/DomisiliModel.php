<?php

namespace App\Models;

use CodeIgniter\Model;

class DomisiliModel extends Model
{
    protected $table            = 'domisili';
    protected $primaryKey       = 'id_domisili';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'RW',
        'RT'
    ];
    public function getDomisili($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_domisili' => $id]);
        }   
    }
}