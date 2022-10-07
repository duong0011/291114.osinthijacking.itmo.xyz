<?php namespace App\Models;

use CodeIgniter\Model;

class Index_model extends Model
{
    protected $db;
   	public function __construct()
   	{
   		$this->db = db_connect();
   	}
   	public function getInfoUser($unitid)
   	{
   		$builder = $this->db->table('user_of_shop')->where('unitid', $unitid)->get();
   		return (count($builder->getResultArray()) == 1) ? $builder->getRowArray() : false;
   	}
    public function getProduct()
    {
        
        return $this->db->table('product')->get()->getResultArray();
    }
}