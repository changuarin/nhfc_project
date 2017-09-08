<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller 
{
	//------ ! ACCOUNT CONTROLLER ! ---//

	public function account_index()
	{
		 $this->load->library('pagination');

	 	 $total_rows = $this->db->count_all('users');
	 	 $limit = 2;

	 	 $start = $this->uri->segment(3);

	 	 $this->db->limit($limit, $start);
	     $query = $this->db->get('users');
	     $data['users'] = $query->result();

	     $config['base_url'] = 'http://localhost/nhfc/index.php/master/account_index/';
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
	    $data['main_content'] = 'master/account/index';
		$this->load->view('layouts/main', $data);	
	}

	public function account_add()
	{
		$this->form_validation->set_rules('first_name','First Name','trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'master/account/add';
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array
			(
				'first_name'  => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name'   => $this->input->post('last_name'),
				'username'    => $this->input->post('username'),
				'password'    => md5($this->input->post('password')),
				'access'      => $this->input->post('access'),
				'status'      => $this->input->post('status')
			);
			if($this->master_model->account_add($data))
			{
			$this->session->set_flashdata('user_added','User Successfully Added.');
			redirect('login/get_users');

			}	
		}	
	}

	public function account_edit($id)
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|min_length[6]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['user'] = $this->master_model->get_account($id);
			
			$data['main_content'] = 'master/account/edit';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array
			(
				'first_name'  => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name'   => $this->input->post('last_name'),
				'username'    => $this->input->post('username'),
				'password'    => md5($this->input->post('password')),
				'access'      => $this->input->post('access'),
				'status'      => $this->input->post('status')
			);
			
			if($this->master_model->account_edit($id, $data))
			{
				$this->session->set_flashdata('user_updated', 'User has been updated');
				
				redirect('master/account_index');
			}
		}
	}

	public function account_delete($id)
	{
		if($this->master_model->account_delete($id))
		{
			$this->session->set_flashdata('user_deleted', 'User Successfully Deleted.');

			redirect('master/account_index');
		}
	}

	//------ ! BRANCH CONTROLLER ! ---//

	public function branch_index()
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

	     $config['base_url'] = 'http://localhost/nhfc/index.php/master/branch_index/';
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
	    $data['main_content'] = 'master/branch/index';
		$this->load->view('layouts/main', $data);		
	}
	public function branch_add()
	{

		$this->form_validation->set_rules('name','Name','trim|required');
		

		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'master/branch/add';
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
			if($this->master_model->branch_add($data))
			{
				$this->session->set_flashdata('branch_added', 'Record Inserted successfully');
					
				redirect('master/branch_index');
			}


		}			

	}

	public function branch_edit($id)
	{
		$this->form_validation->set_rules('name', 'Branch Name', 'required|trim|min_length[6]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['branch'] = $this->master_model->get_branch($id);
			
			$data['main_content'] = 'master/branch/edit';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array
			(
				'company'     		=>$this->input->post('company'),
				'name' 		 		=>$this->input->post('name'),
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
			
			if($this->master_model->branch_edit($id, $data))
			{
				$this->session->set_flashdata('branch_updated', 'Branch has been updated');
				
				redirect('master/branch_index');
			}
		}
	}

	public function branch_delete($id)
	{
		if($this->master_model->branch_delete($id))
		{
			$this->session->set_flashdata('delete_msg', 'Record successfully Deleted.');

			redirect('master/branch_index');
		}
	}


	//------ ! CLIENT CONTROLLER ! ---//


	public function client_add()
	{

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'master/client/add';
			$data['branches'] = $this->branch_model->get_branches();
			$data['payments'] = $this->master_model->get_payment_source();
			$data['pensions'] = $this->master_model->get_pension_type();
			$this->session->set_flashdata('error.msg', 'Required All Fields');
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$birthdate = date('Y-m-d', strtotime($this->input->post('birthdate')));

			$data = array
			(
				'first_name' 		=> $this->input->post('first_name'),
				'middle_name' 		=> $this->input->post('middle_name'),
				'last_name' 		=> $this->input->post('last_name'),
				'birthdate' 		=> $birthdate,
				'gender' 			=> $this->input->post('gender'),
				'civil_status' 		=> $this->input->post('civil_status'),
				'address' 			=> $this->input->post('address'),
				'telephone_no'	 	=> $this->input->post('telephone_no'),
				'mobile_no' 		=> $this->input->post('mobile_no'),
				'res_cert_no' 		=> $this->input->post('res_cert_no'),
				'pension_amount' 	=> $this->input->post('pension_amount'),
				'payment_source_id' => $this->input->post('payment_source'),
				'pension_type_id' 	=> $this->input->post('pension_type'),
				'is_active' 		=> $this->input->post('is_active'),
				'branch_id' 		=> $this->input->post('branch_id')
			);

			if($this->master_model->client_add($data))
			{
				$this->session->set_flashdata('added_client', 'Client Successfully Added!');

				redirect('master/client_index');
			}
		}
	}

	public function dashboard()
	{
		$data['main_content'] = 'master/index';
		$this->load->view('layouts/main', $data);
	}
}	