<?php namespace App\Controllers;

use CodeIgniter\Controller;


class Login extends Controller
{
	protected $helpers = ['form'];
	public function index()
	{
		$data['title'] = 'Đăng nhập';
		if($this->request->getMethod()== "post") {
			$rules = [
				'username' => [
					'rules' => 'required',
					'errors' => [
						'required'=>'Yêu cần điện địa chỉ mail'
					],
				],
				'pass' => [
					'rules' => 'required|min_length[7]',
					'errors' => [
						'required' => 'Yêu cầu nhập mật khẩu',
						'min_length' => 'Số kí tự tối thiểu của mật khẩu là 7'
					]
				]
			];
			if(!$this->validate($rules)) {
				$data['validation'] = $this->validator;	
				return view('login_view', $data);
			}
		}
		return view('login_view', $data);
	}
}