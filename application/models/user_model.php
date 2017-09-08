<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	/** Login Function **/

	public function login($username,$password)
	{
		$enc_password = md5($password);

		$this->db->where('username', $username);
		$this->db->where('password', $enc_password);
		
		$result = $this->db->get('users');
		
		if($result->num_rows() == 1)
		{
			return $result->row();
		} else {
			return FALSE;
		}
	
	}

	

}