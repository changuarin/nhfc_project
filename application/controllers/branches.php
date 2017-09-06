<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends CI_Controller 
{

	/*public function index()
	{

		$this->load->library('pagination');

		$config['base_url'] = 'branches/index';

		$config['total_rows'] = $this->branch_model->count_all();
		$config['per_page'] = 2;

		$config['full_tag_open'] = '<ul>';
		$config['last_tag_open'] = '<ul>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class=\"active\"><span><b>';
		$config['prev_tag_close'] = '<b></span></li>';

		$this->pagination->initialize('$config');

		$data['main_content'] = 'branches/index';
		$data['branches'] = $this->branch_model->get_branches();
		$this->load->view('layouts/main', $data);
	}
	*/

	public function index()
	{
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = "http://localhost/nhfc/branches/index";
		$config['total_rows'] = $this->branch_model->count_all();
		$config['per_page'] = 3;

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = '</ul>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] ="<span class='sr-only'></span></a></li>";

		$config['next_tag_open'] = "<li>";
		$config['next_tag_open'] = "</li>";

		$config['prev_tag_open'] = "<li>";
		$config['prev_tag_close'] = "</li>";

		$config['first_tag_open'] = "<li>";
		$config['first_tag1_close'] = "</li>";

		$config['last_tag_open'] = "<li>";
		$config['last_tag1_close'] = "</li>";

		

		$this->pagination->initialize($config);
		

		$data['branches'] = $this->branch_model->get_branches($config['per_page'], $this->uri->segment(3));
		//$data['links'] = 
		$data['main_content'] = 'branches/index';
		$this->load->view('layouts/main', $data);


		
	}
	public function add_branch()
	{

		$this->form_validation->set_rules('name','Name','trim|required');
		

		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'branches/add';
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array
			(
				'name' 		 		=>$this->input->post('name'),
				'company'     		=>$this->input->post('company'),
				'office_in_charge'  =>$this->input->post('office_in_charge'),	
				'address'    		=>$this->input->post('address'),
				'mobile_no'         =>$this->input->post('mobile_no'),
				'telephone_no'      =>$this->input->post('telephone_no'),
				'fax_no'            =>$this->input->post('fax_no'),
				'other_charges'     =>$this->input->post('other_charges'),
				'processing_fee'    =>$this->input->post('processing_fee'),
				'collection_fee'    =>$this->input->post('collection_fee'),
				'status'            =>$this->input->post('status')
			);
			if($this->branch_model->add($data))
			{
				$this->session->set_flashdata('branch_added', 'Record Inserted successfully');
					
				redirect('branches/index');
			}


		}			

	}

	public function edit($id)
	{
		$this->form_validation->set_rules('name', 'Branch Name', 'required|trim|min_length[6]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['branch'] = $this->branch_model->get_branch($id);
			
			$data['main_content'] = 'branches/edit';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array
			(
				'name' 		 		=>$this->input->post('name'),
				'company'     		=>$this->input->post('company'),
				'office_in_charge'  =>$this->input->post('office_in_charge'),	
				'address'    		=>$this->input->post('address'),
				'mobile_no'         =>$this->input->post('mobile_no'),
				'telephone_no'      =>$this->input->post('telephone_no'),
				'fax_no'            =>$this->input->post('fax_no'),
				'other_charges'     =>$this->input->post('other_charges'),
				'processing_fee'    =>$this->input->post('processing_fee'),
				'collection_fee'    =>$this->input->post('collection_fee'),
				'status'            =>$this->input->post('status')
			);
			
			if($this->branch_model->edit_branch($id, $data))
			{
				$this->session->set_flashdata('branch_updated', 'Branch has been updated');
				
				redirect('branches/index');
			}
		}
	}

	public function delete($id)
	{
		if($this->branch_model->delete($id))
		{
			$this->session->set_flashdata('delete_msg', 'Record successfully Deleted.');

			redirect('branches/index');
		}
	}

	public function all_branch()
	{

		$data['main_content'] = 'modules/index';
		$data['branches'] = $this->branch_model->get_branches();
		$this->load->view('layouts/main', $data);
	}

	

	
}	