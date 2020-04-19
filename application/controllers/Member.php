<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends App_Controller
{


	public function __construct()
	{
		parent::__construct();
		// $this->load->model('member');
		//$this->load->model('shop_cars');
		$this->load->model('member_model');
		$this->load->library('session');

		$this->load->database();
	}
	public function login()
	{

		$this->template->add_js(assets_scripts_url('js/login.js?' . time()));
		$this->template->load('login');
	}
	public function submit_login()
	{
		$user  = array();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($user = $this->member_model->get_user($username, $password)) {
			$result = true;
			$message = true;
			$redirect_link = site_url('Welcome/home');

			$this->session->set_userdata("logged_in_user_info", $user);
			$member_id =    $user['member_id'];
		} else if ($user = $this->member_model->get_user1($username, $password)) {
			$result = true;
			$message = true;
			$redirect_link = site_url('office/Welcome/home');

			$this->session->set_userdata("logged_in_user_info", $user);
			$member_id =    $user['member_id'];
		} else {
			$result = false;
			$message = false;
			$redirect_link = site_url('/');
		}


		echo json_encode(array(
			"success" => $result,
			"msg" => $message,
			"redirect_link" => $redirect_link
		));
	}
	public function set_user_info_session($member_id)
	{
		$this->load->database();

		$this->db->where("member_id", $member_id);
		$query = $this->db->get("member");

		if ($query->num_rows() > 0) {
			$user_info = $query->row_array();

			$this->session->set_userdata("logged_in_user_info", $user_info);
		}
	}

	public function signin()
	{



		//   $data['query'] = $this->student_model->test();

		$this->template->add_js(assets_scripts_url('js/register.js?' . time()));
		$this->template->load('register');
	}

	public function submit_logout()
	{
		$this->do_logout();


		redirect('login');
	}
}
