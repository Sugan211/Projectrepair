<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends App_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		//$this->load->model('shop_cars_model');

		$this->load->library('session');
		//$this->load->library('template');
		$this->load->database();
	}
	public function index()
	{
		//$this->template->add_js(assets_scripts_url('js/login.js'));
		$this->load->view('index');
	}
	public function info1()
	{
		//$this->template->add_js(assets_scripts_url('js/login.js'));
		$this->load->view('info1');
	}
	public function info2()
	{
		//$this->template->add_js(assets_scripts_url('js/login.js'));
		$this->load->view('info2');
	}
	public function info3()
	{
		//$this->template->add_js(assets_scripts_url('js/login.js'));
		$this->load->view('info3');
	}

	public function login()
	{
		$this->template->add_js(assets_scripts_url('js/login.js'));
		$this->load->view('login');
	}
	public function home()
	{
		$logged_in_user_info = $this->session->userdata('logged_in_user_info');
		$member_id  =  $logged_in_user_info['member_id'];

		$data = $this->product_model->get_repair($member_id);

		$filter = array(
			'data'  => $data

		);


		$this->add_data($filter);

		$this->template->load('index1', $this->data);
	}
	public function addrepair()
	{
		//$this->template->add_js(assets_scripts_url('js/login.js?' . time()));

		$data11 = $this->product_model->get_product();
		$emp = $this->product_model->get_emp();

		$filter = array(
			'data11'  => $data11,
			'emp' => $emp
		);


		$this->add_data($filter);

		$this->template->load('addrepair', $this->data);
	}

	public function add_order_repair()
	{
		$logged_in_user_info = $this->session->userdata('logged_in_user_info');
		$member_id  =  $logged_in_user_info['member_id'];

		$equipment_id = $this->input->post("equipment_id");
		$repair_date = $this->input->post("repair_date");
		$repair_detail = $this->input->post("repair_detail");
		$office_id = $this->input->post("office_id");


		$filter = array(
			'member_id'  => $member_id,
			'equipment_id' => $equipment_id,
			'repair_date' => $repair_date,
			'repair_detail' => $repair_detail,
			'office_id' => $office_id
		);

		//$this->template->add_js(assets_scripts_url('js/login.js?' . time()));

		if ($data11 = $this->product_model->add_order_repair($filter)) {
			$office_id	=  $filter['office_id'];
			$emp  =    $this->product_model->query_emp($office_id);
			$pro  =    $this->product_model->query_pro($equipment_id);
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			date_default_timezone_set("Asia/Bangkok");

			$pro  = $pro['equipment_name'];
			$tokenss = $emp['line_token'];
			$detail  = strtoupper("รายละเอียด");
			$sToken = $tokenss;
			$sMessage = $pro . '                                    
			' . "$detail::" . ' ' . $repair_detail;


			$chOne = curl_init();
			curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
			curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($chOne, CURLOPT_POST, 1);
			curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=" . $sMessage);
			$headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $sToken . '',);
			curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
			$result = curl_exec($chOne);

			//Result error 
			if (curl_error($chOne)) {
				echo 'error:' . curl_error($chOne);
			} else {
				$result_ = json_decode($result, true);
				echo "status : " . $result_['status'];
				echo "message : " . $result_['message'];
			}
			curl_close($chOne);
		
			redirect('Welcome/home');
		} else {
			echo "ไม่ผ่าน";
		}
	}

	public function logout()
	{
		$this->do_logout();


		redirect('Welcome/');
	}
	public function editmember()
	{
		$logged_in_user_info = $this->session->userdata('logged_in_user_info');
		$member_id  =  $logged_in_user_info['member_id'];



		$filter = array(
			'logged_in_user_info'  => $logged_in_user_info,

		);


		$this->add_data($filter);

		$this->template->load('editmember', $this->data);
	}

	public function submit_edit()
	{
		$logged_in_user_info = $this->session->userdata('logged_in_user_info');
		$member_id  =  $logged_in_user_info['member_id'];
		$member_name = $this->input->post("member_name");
		$member_lname = $this->input->post("member_lname");
		$member_password = $this->input->post("member_password");

		$filter = array(
			'member_name'  => $member_name,
			'member_lname' => $member_lname,
			'member_password' => $member_password,
			'member_id' =>$member_id

		);

		if ($data  =    $this->product_model->submit_edit($filter)) {
			redirect('Welcome/home');
		}
	}
}
