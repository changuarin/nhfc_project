<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function client_index()
	{
		$this->load->library('pagination');
 		$total_rows = $this->db->count_all('clients');
 		$limit = 5;
 		$start = $this->uri->segment(3);
 	 	$keyword    =   $this->input->post('keyword');
	 	$this->db->like('first_name', $keyword);
 		$this->db->limit($limit, $start);
 		
	  $config['base_url']   = 'http://localhost/nhfc/index.php/master/client_index/';
    $config['total_rows'] = $total_rows;
    $config['per_page']   = $limit;
    $config['full_tag_open']    = "<ul class='pagination'>";
	  $config['full_tag_close']   = "</ul>";
	  $config['num_tag_open']     = "<li>";
	  $config['num_tag_close']    = "</li>";
	  $config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
	  $config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
	  $config['next_tag_open']    = "<li>";
	  $config['next_tagl_close']  = "</li>";
	  $config['prev_tag_open']    = "<li>";
	  $config['prev_tagl_close']  = "</li>";
  	$config['first_tag_open']   = "<li>";
	  $config['first_tagl_close'] = "</li>";
	  $config['last_tag_open']    = "<li>";
  	$config['last_tagl_close']  = "</li>";

  	$this->pagination->initialize($config);

    $data['clients2'] = $this->master_model->get_clients($this->session->userdata('branch'));
    $data['main_content'] = 'sales/loan_application/index';
		$this->load->view('layouts/main', $data);
	}

	public function loan_application_form($id)
	{
		$data['client']   = $this->master_model->get_client($id);
		$data['main_content'] = 'sales/loan_application/add_loan';
		$this->load->view('layouts/main', $data);
	}

	public function add_loan_application_form()
	{
		$this->form_validation->set_rules('client_id' , 'Client ID', 'required|trim');

		if($this->form_validation->run() == FALSE)
		{
			$data['client']   = $this->master_model->get_client($id);
			$data['main_content'] = 'sales/loan_application/add_loan';
			$this->load->view('layouts/main', $data);
		}
		else
		{
			if($this->sales_model->loan_add())
			{
				$this->session->set_flashdata('added_client', 'SuccessFully Added Loan!');
				redirect('sales/client_index');
			}
		}
	}

}