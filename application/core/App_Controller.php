<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_Controller extends CI_Controller {
	var $ci;
    var $data = array();
    var $logged_in_user_info = false;
    var $is_user_logged_in = false;
 

    /**
	 * Constructor
	 */
    public function __construct(){
        parent::__construct();

		 $this->ci =& get_instance();
		$logged_in_user_info = $this->session->userdata('logged_in_user_info');
		if($logged_in_user_info) {
			$this->logged_in_user_info = $logged_in_user_info;
			$this->is_user_logged_in = true;

			$this->session->set_userdata("logged_in_user_info", $this->logged_in_user_info);
		}
   
		
		$this->load->model('member_model');
		$user_inform  =  $this->member_model->get_user_by_id($this->logged_in_user_info['member_id']);

     $data  = array(
		 "is_user_logged_in" =>$this->is_user_logged_in,
	 ); 
	 $this->add_data($data);
		
	}
	public function save_user_info_in_session($account){
		$user_info = $account;

	
		$this->session->set_userdata("logged_in_user_info", $user_info);

		$this->logged_in_user_info = $user_info;
		$this->is_user_logged_in = true;
	}

	function add_data($data){
        $data_keys = array_keys($data);
        $data_values = array_values($data);

        for($i = 0; $i < count($data_keys); $i++){
            $this->data[$data_keys[$i]] = $data_values[$i];
        }
	}
	
	function do_logout(){
		// Keep Lang
		

		$this->session->sess_destroy();
		$this->logged_in_user_info = false;
		$this->is_user_logged_in = false;

	}
}
