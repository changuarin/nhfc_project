<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_model extends CI_Model {

	public function loan_add()
	{
		$date = date('Y-m-d', strtotime($this->input->post('loan_date')));
		$startdate = date('Y-m', strtotime($this->input->post('loan_start_date')));
		$enddate = date('Y-m', strtotime($this->input->post('loan_end_date')));

		$data = array(
			'client_id' 		   	     => $this->input->post('client_id'),
			'branch_id' 	    	     => $this->session->userdata('branch'),
			'loan_amount'	  	       => $this->input->post('loan_amount'),
			'principal_amount'       => $this->input->post('principal_amount'),
			'net_proceeds'           => $this->input->post('net_proceeds'),
			'interest_rate'          => 0.02,
			'other_charges_rate'     => 0.006,
			'interest_amount'        => $this->input->post('interest_amount'),
			'other_charges_amount'   => $this->input->post('other_charges_amount'),
			'loan_date'              => $date,
			'processing_fee_amount'  => $this->input->post('processing_fee_amount'),
			'loan_type'              => $this->input->post('loan_type'),
			'loan_terms'             => $this->input->post('loan_terms'),
			'processed_date'         => $date,
			'loan_start_date'        => $startdate,
			'loan_end_date'        	 => $enddate,
			'processed_by'           => $this->session->userdata('username')
		);

		$query = $this->db->insert('loans', $data);
		return $query;
	}
}