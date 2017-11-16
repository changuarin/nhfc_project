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

	public function get_branches()
	{

		//$this->db->where('branches_id', $branch_id);
		$this->db->order_by('name','asc');
		$query = $this->db->get('branches');


		return $query->result();
	}
	
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

	public function client_delete($id)
	{
		$this->db->where('id', $id);

		$query = $this->db->delete('clients');

		return $query;
	}

	public function get_clients($branch_id)
	{
		$this->db->select
		(
			"clients.id, 
			 CONCAT(clients.last_name, ', ', clients.first_name , ' ', clients.middle_name) AS fullname,
			 clients.picture, 
			 clients.birthdate,
			 clients.gender, 
			 clients.civil_status, 
			 clients.address, 
			 clients.mobile_no, 
			 clients.telephone_no, 
			 clients.res_cert_no, 
			 clients.group, 
			 clients.is_active, 
			 clients.bank_branch, 
			 clients.pension_amount,
			 clients.withdrawal_day, 
			 branches.name as branch_name, 
			 branches.id as branch_id,
			 payment_source.name as payment_source_name, 
			 pension_type.name as pension_type_name, 
			 payment_type.name as payment_type_name"
		);
		$this->db->from('clients');
		$this->db->join('branches', 'clients.branch_id = branches.id');
		$this->db->join('payment_source', 'clients.payment_source_id = payment_source.id');
		$this->db->join('pension_type', 'clients.pension_type_id = pension_type.id');
		$this->db->join('payment_type', 'clients.payment_type_id = payment_type.id');
		$this->db->where('branches.id', $branch_id);
		$query = $this->db->get();

		return $query->result();
	}

	public function get_client($id)
	{

		$this->db->select
		(
		 "clients.id, 
			CONCAT(clients.last_name, ', ', clients.first_name , ' ', clients.middle_name) AS fullname,
			clients.birthdate, 
			clients.gender, 
			clients.civil_status, 
			clients.address, 
			clients.telephone_no,
			clients.mobile_no, 
			clients.res_cert_no, 
			clients.group, 
			clients.is_active, 
			clients.bank_branch, 
			clients.pension_amount, 
			clients.withdrawal_day, 
			branches.name as branch_name, 
			branches.id as branches_id, 
			payment_source.name as payment_source_name, 
			payment_source.id as payment_source_id, 
			pension_type.name as pension_type_name, 
			pension_type.id as pension_type_id, 
			payment_type.name as payment_type_name"
		);
		$this->db->from('clients');
		$this->db->join('branches', 'clients.branch_id = branches.id');
		$this->db->join('payment_source', 'clients.payment_source_id = payment_source.id');
		$this->db->join('pension_type', 'clients.pension_type_id = pension_type.id');
		$this->db->join('payment_type', 'clients.payment_type_id = payment_type.id');
		$this->db->where('clients.id', $id);

		$query = $this->db->get();
		return $query->row();

	}

	public function client_edit($id, $data)
	{
		$this->db->where('id', $id);

		$query = $this->db->update('clients', $data);

		return $query;


	}

}
