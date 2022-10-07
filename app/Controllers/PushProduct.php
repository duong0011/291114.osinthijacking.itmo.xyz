<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Product;
class PushProduct extends Controller
{
	private $db;
	public function __construct()
	{
		helper('form');
		$this->db = new Product();
	}
	public function index()
	{
		$session = \CodeIgniter\Config\Services::session();
		$data['validation'] = Null;
		if(!session()->has('loged_user'));
		if($this->request->getMethod() == "post") {
			$rules = [
          		'nameproduct' => [
          			'rules' =>'required',
          			'errors' => [
          				'required'=>'Tên loài cá là bắt buộc',
          			]
          		],
                'info' => [
          			'rules' =>'required',
          			'errors' => [
          				'required'=>'Thông tin loài cá là băt buộc',
          			]
          		],
                'amuont' => [
          			'rules' =>'required|alpha_numeric_punct',
          			'errors' => [
          				'required'=>'Giá loài cá là bắt buộc',
          				'alpha_numeric'=>'Giá chỉ bao gồm số'
          			]
          		],
          		'file' => [
          			'rules' => 'uploaded[file]|is_image[file]',
          			'errors' => [
          				'uploaded' => 'File đính kèm là bắt buộc',
          				'ext_in' =>'Chỉ FILE ảnh là được cho phép'
          			]
          		],
          		'price' => [
          			'rules' =>'required|alpha_numeric_punct',
          			'errors' => [
          				'required'=>'Giá loài cá là bắt buộc',
          				'alpha_numeric'=>'Giá chỉ bao gồm số'
          			]
          		],
          		'discount' => [
          			'rules' =>'required|alpha_numeric_punct',
          			'errors' => [
          				'required'=>'Giá loài cá là bắt buộc',
          				'alpha_numeric'=>'Giá chỉ bao gồm số'
          			]
          		],
       		];
       		if($this->validate($rules)) {
       			$file = $this->request->getFile('file');
       			$hex = base64_encode(file_get_contents($file));
       			//echo $this->request->getVar('type', FILTER_UNSAFE_RAW);
       			$tdata = [
       				'nameproduct' => $this->request->getVar('nameproduct', FILTER_UNSAFE_RAW),
       				'amuont' => $this->request->getVar('amuont', FILTER_UNSAFE_RAW),
       				'discount' => $this->request->getVar('discount', FILTER_UNSAFE_RAW),
       				'info' => $this->request->getVar('info', FILTER_UNSAFE_RAW),
       				'price' => $this->request->getVar('price', FILTER_UNSAFE_RAW),
       				'image'	=> $hex,
       				'owner' => session()->get('loged_user'),
       				'type' => $this->request->getVar('type', FILTER_UNSAFE_RAW)

       			];
       			$this->db->save($tdata);
       		} else {
       			$data['validation'] = $this->validator;
       		}
		}
		
		return view('addProduct', $data);
	}
}