<?php namespace App\Models;

use CodeIgniter\Model;

class userDB extends Model
{
    protected $table      = 'users_of_shop';
    protected $primaryKey = 'uid';

    protected $returnType = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['fullname', 'username', 'password', 'email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    //protected $validationRules    = [];
    //protected $validationMessages = [];
    //protected $skipValidation     = false;
}