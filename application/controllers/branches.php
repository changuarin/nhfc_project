<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends CI_Controller 
{


	public function index()
	{
		// Get record count
	 	 $this->load->library('pagination');

	 	 $total_rows = $this->db->count_all('branches');
	 	 $limit = 5;

	 	 $start = $this->uri->segment(3);

	 	 $this->db->order_by('name','asc');
	 	 $this->db->limit($limit, $start);
	     $query = $this->db->get('branches');
	     $data['branches'] = $query->result();

	     $config['base_url'] = 'http://localhost/nhfc/index.php/branches/index/';
	     $config['total_rows'] = $total_rows;
	     $config['per_page'] = $limit;

	     $config['full_tag_open'] = "<ul class='pagination'>";
		 $config['full_tag_close'] ="</ul>";
		 $config['num_tag_open'] = '<li>';
		 $config['num_tag_close'] = '</li>';
		 $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		 $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		 $config['next_tag_open'] = "<li>";
		 $config['next_tagl_close'] = "</li>";
		 $config['prev_tag_open'] = "<li>";
		 $config['prev_tagl_close'] = "</li>";
		 $config['first_tag_open'] = "<li>";
		 $config['first_tagl_close'] = "</li>";
		 $config['last_tag_open'] = "<li>";
		 $config['last_tagl_close'] = "</li>";

	     
	  
	     $this->pagination->initialize($config);	
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
		// Get record count
	 	 $this->load->library('pagination');

	 	 $total_rows = $this->db->count_all('branches');
	 	 $limit = 5;

	 	 $start = $this->uri->segment(3);

	 	 $this->db->order_by('name','asc');
	 	 $this->db->limit($limit, $start);
	     $query = $this->db->get('branches');
	     $data['branches'] = $query->result();

	     $config['base_url'] = 'http://localhost/nhfc/index.php/branches/all_branch/';
	     $config['total_rows'] = $total_rows;
	     $config['per_page'] = $limit;

	     $config['full_tag_open'] = "<ul class='pagination'>";
		 $config['full_tag_close'] ="</ul>";
		 $config['num_tag_open'] = '<li>';
		 $config['num_tag_close'] = '</li>';
		 $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		 $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		 $config['next_tag_open'] = "<li>";
		 $config['next_tagl_close'] = "</li>";
		 $config['prev_tag_open'] = "<li>";
		 $config['prev_tagl_close'] = "</li>";
		 $config['first_tag_open'] = "<li>";
		 $config['first_tagl_close'] = "</li>";
		 $config['last_tag_open'] = "<li>";
		 $config['last_tagl_close'] = "</li>";

	    $this->pagination->initialize($config);	
	    $data['main_content'] = 'modules/landingpage/index';
		$this->load->view('layouts/main', $data);
	}

	public function all_modules()
	{
		$data['main_content'] = 'modules/index';
		$this->load->view('layouts/main', $data);
	}

	public function admin_all_modules()
	{
		$data['main_content'] = 'modules/index2';
		$this->load->view('layouts/main', $data);
	}

	

	
}	