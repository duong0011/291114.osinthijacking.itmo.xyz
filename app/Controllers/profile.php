<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Profile extends Controller
{
	public function index()
	{
		if(!session('loged_user')) return redirect()->to(base_url().'/login');
		return view('profile');
	}
}