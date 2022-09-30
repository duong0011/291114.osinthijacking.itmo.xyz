<?php namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Models\userDB;

class Signup extends Controller
{
	public $db;
	public $session;
	public function __construct()
	{
		$this->db = new userDB();
		$this->session = \Config\Services::session();
		helper('form');
		
	}
	public function index()
	{
		$data['validation'] = NULL;
		$data['title'] = "Đăng kí";
		$data['smg'] = NUll;
		
		if($this->request->getMethod() == "post") {
			$rules = [
				'fullname' => [
					'rules' => 'required|max_length[40]',
					'errors' =>[
						'required' => 'Điền đầy đủ họ và tên',
						'max_length' => 'Tên quá dài'
					]
				],
				'email' => [
					'rules' => 'required|valid_email',
					'errors' =>[
						'required' => 'Điền địa chỉ mail',
						'valid_email' => 'Địa chỉ mail không chính xác'
					]
				],
				'username' => [
					'rules' => 'required|min_length[8]',
					'errors' =>[
						'required' => 'Điền tên đăng nhập',
						'min_length' => 'Tên đăng nhập phải có it nhất 8 kí tự'
					]
				],
				'pass' => [
					'rules' => 'required|min_length[8]',
					'errors' =>[
						'required' => 'Nhập mật khẩu',
						'min_length' => 'Mật khẩu phải có it nhất 8 kí tự'
					]
				],
				'repass' => [
					'rules' => 'required|matches[pass]',
					'errors' =>[
						'required' => 'Nhập mật khẩu',
						'matches' => 'Xác nhận mật khẩu không chính xác'
					]
				],
			];
			if(!$this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else{
				if(!isset($_POST['confirm'])) {
					$data['smg'] = "Bạn có đồng ý với điều khoảng dịch vụ";
					return view('signup', $data);
				}
				$tdata = [
       				'fullname' => $this->request->getVar('fullname', FILTER_UNSAFE_RAW),
       				'username' => $this->request->getVar('username', FILTER_UNSAFE_RAW),
       				'password' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
       				'email' => $this->request->getVar('email', FILTER_UNSAFE_RAW),
       			];
       			if($this->db->where('username', $tdata['username'])->countAllResults()) {
       				$data['smg'] = "Tên tài khoảng đã được sử dụng";
       				return view('signup', $data);
       			}
       			$this->db->save($tdata);
       			$this->session->set('success', 'Đăng kí thành công', 3);
       			return redirect()->to(base_url().'/login');
			}
		}
		return view('signup', $data);
	}
}