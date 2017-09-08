<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model 
{
	///--- ! ACCOUNT MODEL ! ---///

	public function get_accounts()
	{
		$query = $this->db->get('users');

		return $query->result();

	}

	public function account_add($data)
	{
		$query = $this->db->insert('users', $data);

		return $query;
	}

	public function get_account($id)
	{
		$this->db->where('id', $id);

		$query = $this->db->get('users');

		return $query->row();
	}

	public function account_edit($id, $data)
	{

		$this->db->where('id', $id);

		$query = $this->db->update('users', $data);

		return $query;
	}	

	public function account_delete($id)
	{
		$this->db->where('id', $id);

		$query = $this->db->delete('users');

		return $query;
	}

	///--- ! BRANCH MODEL ! ---///

	public function get_branch($id)
	{
		$this->db->where('id', $id);

		$query = $this->db->get('branches');
		
		return $query->row();
	}

	public function branch_add($data)
	{
		$query = $this->db->insert('branches', $data);

		return $query;
	}

	public function branch_edit($id, $data)
	{
		$this->db->where('id', $id);
		$query = $this->db->update('branches', $data);

		return $query;
	}

	public function branch_delete($id)
	{
		$this->db->where('id', $id);

		$query = $this->db->delete('branches');

		return $query;
	}

	///--- ! CLIENT MODEL ! ---///

	public function get_payment_source()
	{
		$query = $this->db->get('payment_source');
		
		return $query->result();
	}

	public function get_pension_type()
	{
		$query = $this->db->get('pension_type');

		return $query->result();
	}

	public function client_add($data)
	{
		$query = $this->db->insert('clients', $data);

		return $query;
	}


}
