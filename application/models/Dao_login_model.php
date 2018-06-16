<?php
//heredamos todos los recursos de la clase CI_Model
class Dao_login_model extends CI_Model
{
	
	public function __construct()
	{
		
		parent::__construct();
		
	}
	
	public function registerUser($data)
	{
		$query = $this->db->insert('user', $data);

		if ($query) {
			return true;
		}else{
			return false;
		}

	}

	public function loginUser($data){
		$query = $this->db->get_where('user', array('username' => $data['username']));
		if ($query->num_rows() > 0) {
			$query2 = $this->db->get_where('user', array('password' => $data['password']));
			if ($query2->num_rows() > 0) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	//
	public function getUserByUsername($username){
		$query = $this->db->get_where('user', array('username' => $username));
		return $query->row();
	}
	
	
}





