<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "konsumen";
    protected $primaryKey = "id_konsumen";
    protected $allowedFields = ['nama', 'username', 'email', 'no_telp', 'password'];
}