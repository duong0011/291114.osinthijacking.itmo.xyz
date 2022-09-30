<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
class CustomModel {
	protected $db;
	public function __construct(ConnectionInterface &$db)
	{
		$this->db = &$db;
	}
	public function getListCustomers()
	{
		
		$builder = $this->db->table('type_fish');
		$builder->join('users_of_shop', 'type_fish.userID = users_of_shop.uid');
		$result = $builder->get()->getResultArray();
		return $result;
	}
}

?>