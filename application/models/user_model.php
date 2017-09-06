<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	/** Login Function **/

	public function login_user($username,$password)
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

	public function get_users()
	{
		$query = $this->db->get('users');

		return $query->result();


	}

	public function add_user($data)
	{
		$query = $this->db->insert('users', $data);

		return $query;
	}

	public function get_user($id)
	{
		$this->db->where('id', $id);

		$query = $this->db->get('users');

		return $query->row();
	}

	public function edit_user($id, $data)
	{

		$this->db->where('id', $id);

		$query = $this->db->update('users', $data);

		return $query;
	}	

	public function delete_user($id)
	{
		$this->db->where('id', $id);

		$query = $this->db->delete('users');

		return $query;
	}

}