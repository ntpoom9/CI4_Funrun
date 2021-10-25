<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model {
    protected $table = 'admin';
    // protected $primaryKey = 'id_card';
    protected $allowedFields = [
       'email',
       'password',
        ];
}
?>