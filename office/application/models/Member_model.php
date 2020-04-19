<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member_model extends CI_Model 
{
    function __construct()
    {
      parent::__construct(); // construct the Model class
    }

    public function submit_register ($data,$res ="")
    {
     
			$this->db->where("email" ,  $data['email']);
			$query = $this->db->get("member");
			if ($query->num_rows() == 0) {
				// Hash Password
			//	$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
	
				$this->db->insert('member', $data);
				return $this->db->insert_id();
			} else {
				return false;
			}
	
			
	}
		public function get_user($username, $password){
			$this->db->where('member_username', $username);
			$this->db->where('member_password',$password);
			$this->db->where('type_id',3);
			$query = $this->db->get('member');
			if ($query->num_rows() > 0) {
			$row = $query->row_array();
			 return $row;
			}
			else
			{
				return array();
			}
		}

		public function get_user1($username, $password){
			$this->db->where('member_username', $username);
			$this->db->where('member_password',$password);
			$this->db->where('type_id',2);
			$query = $this->db->get('member');
			if ($query->num_rows() > 0) {
			$row = $query->row_array();
			 return $row;
			}
			else
			{
				return array();
			}
		}

		 
		public function get_user_by_id($id) {
			$this->db->where('member_id', $id);
			$query = $this->db->get('member');
			$row = $query->row_array();
			return $row;
		}

		public function login_facebook($email, $facebook_id,$user_name,$user_lname) {
			$this->db->where("email" , $email);
	
			$query = $this->db->get("member");
	
		if($query->num_rows()<1)
		{
			$sql = "INSERT INTO member(email,user_name,user_lname,facebook_id) VALUES('$email','$user_name','$user_lname','$facebook_id')";
			$query1 = $this->db->query($sql) or die(mysql_error());
		}
	
			$this->db->where("email" , $email);
			$query = $this->db->get("member");
			if ($query->num_rows() > 0) {
				$row = $query->row_array();
				$user_id = $row['user_id'];
				// Save facebook id
				$u_data = array(
					"facebook_id" => $facebook_id
				);
				$this->save_profile($user_id, $u_data);

				$row['facebook_id'] = $facebook_id;

				//$this->db->where('user_id', $row['user_id']);
				//$s_query = $this->db->get('shop');
	
				//$row['shop'] = $s_query->row_array();
				return $row;
				return 2;
			}
			return 1;
		}
		public function save_profile($member_id,$data) {
			$this->db->where("member_id", $member_id);
			$this->db->update("member", $data);
		}
}
    ?>
