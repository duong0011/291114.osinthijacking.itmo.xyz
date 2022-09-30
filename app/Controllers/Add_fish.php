<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AddfishModel;
use App\Models\CustomModel;
use Config\Services;

class Add_fish extends Controller
{
	private $smg;
	protected $helpers = ['form'];
	public function index()
	{	
		$session = \CodeIgniter\Config\Services::session();
		$data['validation'] = Null;
		$model = new AddfishModel();
		if($this->request->getMethod() == "post") {
			$rules = [
          		'name' => [
          			'rules' =>'required',
          			'errors' => [
          				'required'=>'Tên loài cá là bắt buộc',
          			]
          		],
                'color' => [
          			'rules' =>'required',
          			'errors' => [
          				'required'=>'Màu của cá là bắt buộc',
          			]
          		],
                'local' => [
          			'rules' =>'required',
          			'errors' => [
          				'required'=>'Nơi sinh sống của cá là bắt buộc',
          			]
          		],
                'info' => [
          			'rules' =>'required',
          			'errors' => [
          				'required'=>'Thông tin loài cá là băt buộc',
          			]
          		],
                'price' => [
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
          		]
       		];
       		if($this->validate($rules)) {
       			$tdata = [
       				'name' => $this->request->getVar('name', FILTER_UNSAFE_RAW),
       				'color' => $this->request->getVar('color', FILTER_UNSAFE_RAW),
       				'local' => $this->request->getVar('local', FILTER_UNSAFE_RAW),
       				'info' => $this->request->getVar('info', FILTER_UNSAFE_RAW),
       				'price' => $this->request->getVar('price', FILTER_UNSAFE_RAW),
       			];
       			if($model->save($tdata)) {
       				$session->setTempdata('success',"Nhập dữ liệu thành công", 3);

       			}
       			else {
       				$session->setTempdata('error', "Nhập dữ liệu thất bại", 3);
       			}
       		} else {
       			$data['validation'] = $this->validator;
       		}
		}
		
		$data['dta'] = $model->find();
		echo view('Add_fish', $data);
		echo view('ListFish');
	}
	public function delete($id)
	{
		
		$model = new AddfishModel();
		$fish = $model->find($id);
		if($fish) {
			$model->delete($id);
			return redirect()->to('/Add_fish');
		}
	}
	public function update($id)
	{
		$model = new AddfishModel();
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$_POST['fid'] = $id;
			$model->save($_POST);
		}
		$data = [
				'smg' => $this->smg,
				'dta' => $model->find($id)
				];
		return view('UpdateFish', $data);
		
	}
}