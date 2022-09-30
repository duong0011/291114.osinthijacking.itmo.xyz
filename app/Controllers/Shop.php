<?php

namespace App\Controllers;


class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }
    public function callShop()
    {
        $shop = new Shop();
        echo $shop->product();
        $table = new \CodeIgniter\View\Table();
        $table->setHeading('Name', 'Color', 'Size');
        $table->addRow('Fred', 'Blue', 'Small');
        $table->addRow('Mary', 'Red', 'Large');
        $table->addRow('John', 'Green', 'Medium');
        echo $table->generate();

    }
    public function insertData()
    {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $phone = $_POST['phone'];

        $db = \Config\Database::connect();
        $sql = $db->query("insert into users_of_shop(fullname, password, phone) values ('{$username}', '{$pass}', '{$phone}')");
        if($sql) echo "Thành công";
        else echo "Thất bại";
    }
}
