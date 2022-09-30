<?php namespace App\Models;

use CodeIgniter\Model;

class AddfishModel extends Model
{
    protected $table      = 'type_fish';
    protected $primaryKey = 'fid';

    protected $returnType = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'color', 'local', 'info', 'price', 'img'];

    //protected $useTimestamps = false;
    //protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;
   
}