<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_model extends CI_Model 
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

	
		public function get_product(){
			
			$query = $this->db->get('equipment');
			
			
			return $query->result_array();
			
		}

		public function get_repair($member_id){
			
		$sql ="SELECT  t2.office_name as office_name,t3.office_lname as office_lname,a.repair_status as 
    repair_status, a.repair_id as repair_id, a.repair_date as repair_date,
     b.member_name as Names , c.equipment_name as  EsName , a.repair_detail as repairdetail 
    FROM repair a  INNER JOIN 
    (
      SELECT  f.member_name as  office_name,e.repair_id from member f 
      INNER JOIN  repair e ON f.member_id =  e.office_id  
     ) t2  ON a.repair_id = t2.repair_id 
    INNER JOIN 
    (
      SELECT  f.member_lname as  office_lname,e.repair_id from member f 
      INNER JOIN  repair e ON f.member_id =  e.office_id  
      ) t3  ON a.repair_id = t3.repair_id  
      INNER JOIN   member b  on a.member_id = b.member_id  
    INNER JOIN equipment c  on a.equipment_id = c.equipment_id where a.member_id = '".$member_id."' ";
	 

	 $query1 = $this->db->query($sql);

	 return $query1->result_array();
			
		}


		 
		public function get_user_by_id($id) {
			$this->db->where('member_id', $id);
			$query = $this->db->get('member');
			$row = $query->row_array();
			return $row;
		}

	
		public function save_profile($member_id,$data) {
			$this->db->where("member_id", $member_id);
			$this->db->update("member", $data);
		}
		public function add_order_repair($filter =array()) {
		
		$sql = "INSERT INTO repair(member_id,equipment_id,repair_detail,repair_date,repair_status,office_id)
		 VALUES('".$filter['member_id']."','".$filter['equipment_id']."','".$filter['repair_detail']."','".$filter['repair_date']."','1','".
		 $filter['office_id']."')";
		$query1 = $this->db->query($sql) or die(mysql_error());
		
		return $query1;
		}
		

		public function submit_edit($filter=array())
	{
		$sql = "update  member  set member_name  = '".$filter['member_name']."' , member_lname = '".$filter['member_lname']."'
		,member_password  = '".$filter['member_password']."' where member_id  = '".$filter['member_id']."' ";
		
		$query1 = $this->db->query($sql) or die(mysql_error());

		return $query1;
		
	}

 
		public function get_emp()
	{
		$status = 2;
		$this->db->where("type_id" ,$status);
		
		$query = $this->db->get('member');
		
		return $query->result_array();
	}

	public function query_emp($office_id)
	{
		
		$sql  = "SELECT member.line_token  from member 
       
 where member.member_id = '".$office_id."' ";
	 

	 $query1 = $this->db->query($sql);

	 return $query1->row_array();
	}

	
	public function query_pro($equipment_id)
	{
		
		$sql  = "SELECT equipment.equipment_name  from equipment 
       
 where equipment.equipment_id = '".$equipment_id."' ";
	 

	 $query1 = $this->db->query($sql);

	 return $query1->row_array();
	}
}
