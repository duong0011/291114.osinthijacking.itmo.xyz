<?php namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table      = 'product';
    protected $primaryKey = 'pid';

    protected $returnType = 'array';
  
    protected $allowedFields = ['nameproduct','price','like','rating','amount', 'info','owner','image','discount', 'type'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
  
}