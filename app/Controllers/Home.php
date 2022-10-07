<?php

namespace App\Controllers;
use App\Models\index_model;

class Home extends BaseController
{
    private $model;
    public function __construct()
    {
        $this->model = new index_model();
    }
    public function index()
    {   
        $data = [];
        if(session()->has('loged_user')) {
            $data['user'] = $this->model->getInfoUser(session()->get('loged_user'));
        }
        $data['products'] = $this->model->getProduct();
        return view('welcome_message', $data);
    }
    
}
