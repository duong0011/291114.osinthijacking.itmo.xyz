<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;

class Register extends Controller
{
	private $db;
	private $session;
	public function __construct()
	{
		$this->db = new userModel();
		$this->session = \Config\Services::session();
		helper('form');
	}
	public function index()
	{
		if(session()->has('loged_user')) {
			return redirect()->to(base_url().'/home');
		}
		$data['validation'] = NULL;
		$data['smg'] = NUll;
		if($this->request->getMethod() == "post") {
			$rules = [
				'fullname' => [
					'rules' => 'required|max_length[40]',
					'label' => 'Your name'
				],
				'email' => [
					'rules' => 'required|valid_email',
					
				],
				'username' => [
					'rules' => 'required|min_length[8]',
					
				],
				'password' => [
					'rules' => 'required|min_length[8]',
					
				],
				'repassword' => [
					'rules' => 'required|matches[password]',
					'label' => 'comfirm password'
				],
				'phonenumber' => [
					'rules' => 'required|min_length[10]',
					'label' => 'mobile number',
					'errors' => [
						'min_length' => 'Incorrect telephone number'
					]
				]
			];
			if(!$this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else{
				if(!isset($_POST['confirm'])) {
					$data['smg'] = "Do you agree to the terms of service?";
					return view('Register', $data);
				}
				$unitid = md5(str_shuffle('qwertyuiopasdfghjklzxcvbnm'));
				$hex = base64_encode(file_get_contents('./assets/img/non-avatar.png'));
				$tdata = [
       				'fullname' => $this->request->getVar('fullname', FILTER_UNSAFE_RAW),
       				'username' => $this->request->getVar('username', FILTER_UNSAFE_RAW),
       				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
       				'email' => $this->request->getVar('email', FILTER_UNSAFE_RAW),
       				'phonenumber' => $this->request->getVar('phonenumber', FILTER_UNSAFE_RAW),
       				'unitid' => $unitid,
       				'avatar' => $hex,

       			];
       			if($this->db->where('username', $tdata['username'])->countAllResults()) {
       				$data['smg'] = "This user name have been used!";
       				return view('Register', $data);
       			}

				$email = \Config\Services::email();
				$email->setFrom('duongtruong2022003@gmail.com', 'Funny Donut');
				$email->setTo($_POST['email']);
				$message = "Hi{$_POST['fullname']}! <br><br>Thanks your account created successfully. Please click the below link to active your Account<br><br>"
				."<a href='".base_url()."/register/active/".$unitid."'>Activate Now</a>";
				$email->setSubject('Account Activation link - Funny Donut');
				$email->setMessage($message);
				$email->send();
       			$this->db->save($tdata);
       			$this->session->set('success','Sign Up Success! Please check your mail to active your account');
       			return redirect()->to(base_url().'/login');
			}
		}
		return view('Register', $data);		
	}
	public function active($unitid)
	{	
		$builder = $this->db;
		$builder->set(['status' => 'active']);
		$builder->where('unitid', $unitid);
		if(count($builder->get()->getResultArray())) {
			if(count($builder->where('status =', 'inactive')->where('unitid', $unitid)->get()->getResultArray())) {
				$builder->update();
				$this->session->set('success','Activation complete');
				return redirect()->to(base_url().'/login');
			}
			else echo "Your account have been actived!";
		}
		else echo "Can't find your account!";

	}
}