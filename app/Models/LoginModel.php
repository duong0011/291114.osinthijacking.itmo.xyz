<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
	protected $db;
   	public function __construct()
   	{
   		$this->db = db_connect();
   	}
   	public function verifyUsername($username)
   	{
   		$builder = $this->db->table('user_of_shop');
   		$builder->select('username, password, status,unitid');
   		$result = $builder->where('username', $username)->get();
   		return (count($result->getResultArray())) ? $result->getRowArray() : false;
   	}
   	public function user_exists($id)
   	{
   		$builder= $this->db->table('user_of_shop');
   		$builder->select('username');
   		$result = $builder->where('username', $id)->get();
   		return (count($result->getResultArray())) ? true : false;
   	}
}