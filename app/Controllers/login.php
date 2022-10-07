<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;
use App\Models\userModel;
class Login extends Controller
{
	private $db;
	private $session;
	private $db2;
	public function __construct()
	{	
		$this->session = session();
		$this->db = new LoginModel();
		$this->db2 = new userModel();
	}
	public function index()
	{
		if(session()->has('loged_user')) {
			return redirect()->to(base_url().'/home');
		}
		$data = [];
		//login by app
		if($this->request->getMethod() == "post") {
			$rules = [
				'username' => [
					'rules' => 'required|min_length[8]',
				],
				'password' => [
					'rules' => 'required|min_length[8]',
				]
			];

			if(!$this->validate($rules)) {
				$data['validation'] = $this->validator;
			} else {
				$username = $this->request->getVar('username', FILTER_UNSAFE_RAW);
				$password = $this->request->getVar('password');
				$gdata = $this->db->verifyUsername($username);
				if(!$gdata) {
					$this->session->set('success', 'Username incorect');
					return view('login', $data);
				}
				if($gdata['status'] != 'active') {
					$this->session->set('success', "You haven't activated your account yet! Please check your email for activation!");
					return view('login', $data);
				}
				if(password_verify($password, $gdata['password'])) {
					$this->session->set('loged_user', $gdata['unitid']);
					return redirect()->to(base_url().'/home');
				}
				$this->session->set('success', 'Password incorect');
			}
		}
		//login by google
		require_once APPPATH . "libraries/vendor/autoload.php";
		$google_client = new \Google\Client();

  		$google_client->setClientId('473501547528-vfnldg0b6m2cbbvlq6djj95qtp1fs3so.apps.googleusercontent.com'); //Define your ClientID

 		$google_client->setClientSecret('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'); //Define your Client Secret Key

  		$google_client->setRedirectUri(base_url().'/login'); //Define your Redirect Uri

  		$google_client->addScope('email');

 		$google_client->addScope('profile');
		if($this->request->getVar('code')) {
			$token = $google_client->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
			if(!isset($token['error'])) {
				$google_client->setAccessToken($token['access_token']);
				$this->session->set('access_token', $token['access_token']);
				//to get the profile data
				$google_service = new \Google_Service_Oauth2($google_client);
				$gdata = $google_service->userinfo->get();
				if(!$this->db->user_exists($gdata['id'])) {
					$unitid = md5(str_shuffle('qwertyuiopasdfghjklzxcvbnm'));
					$hex = base64_encode(file_get_contents('./assets/img/non-avatar.png'));
					$ndata = [
						'fullname' => $gdata['family_name'].' '.$gdata['given_name'],
						'username' => $gdata['id'],
						'email' => $gdata['email'],
						'status' => 'social_user',
						'unitid' => $unitid,
						'avatar' => $hex
					];
					$this->db2->save($ndata);
					session()->set('loged_user', $unitid);
					return redirect()->to(base_url().'/home');
				}
				$ndata = $this->db->verifyUsername($gdata['id']);
				$this->session->set('loged_user', $ndata['unitid']);
				return redirect()->to(base_url().'/home');
			}
		}
		if(!session()->has('access_token')){
			$data['loginButton'] = $google_client->createAuthUrl();
		}
		
		return view('login', $data);		
	}
	public function logout()	
	{
		session()->remove('loged_user');
		session()->destroy();
		return redirect()->to(base_url().'/login');
	}
}