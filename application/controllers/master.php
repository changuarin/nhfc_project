<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller 
{
	//------ ! ACCOUNT CONTROLLER ! ---//

public function __construct()
	{
		parent::__construct();
		
		if($this->session->userdata('access') == 'sales' || $this->session->userdata('access') == 'accounting' || $this->session->userdata('access') == 'collection')
		{
			$this->session->set_flashdata('no_access', 'Sorry, you are not logged in');
			
			redirect('user/account');
		}
		
	}

	public function account_index()
	{ 
		 $this->load->library('pagination');

	 	 $total_rows = $this->db->count_all('users');
	 	 $limit = 2;

	 	 $start = $this->uri->segment(3);

	 	 $this->db->limit($limit, $start);
	 	 $keyword = $this->input->post('keyword');
	 	 $this->db->like('first_name', $keyword);
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
		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[2]');
		$this->form_validation->set_rules('middle_name','Middle Name','trim|required|min_length[2]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[2]');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[6]');
		$this->form_validation->set_rules('password','password','trim|required|min_length[6]');

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
			redirect('master/account_index');

			}	
		}	
	}

	public function account_edit($id)
	{
		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[2]');
		$this->form_validation->set_rules('middle_name','Middle Name','trim|required|min_length[2]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[2]');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[6]');
		$this->form_validation->set_rules('password','password','trim|required|min_length[6]');
		
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
	 	$keyword    =   $this->input->post('keyword');
	 	$this->db->like('name', $keyword);
	  $query = $this->db->get('branches');
	  $data['branches'] = $query->result();

	  $config['base_url']   = 'http://localhost/nhfc/index.php/master/branch_index/';
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
	  $data['main_content'] = 'master/branch/index';
		$this->load->view('layouts/main', $data);		
	}
	public function branch_add()
	{

		$this->form_validation->set_rules('name','Branch Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('company','Company','trim|required|min_length[3]');
		$this->form_validation->set_rules('office_in_charge','Office In Charge','trim|required|min_length[2]');
		$this->form_validation->set_rules('address','Address','trim|required|min_length[6]');
		$this->form_validation->set_rules('mobile_no','Mobile No','trim|required|max_length[11]');
		$this->form_validation->set_rules('telephone_no','Telephone No','trim|required|max_length[13]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'master/branch/add';
			$this->load->view('layouts/main', $data);
		}
		else
		{
			$data = array
			( 
				'name' 		 	      	=>$this->input->post('name'),
				'company'       		=>$this->input->post('company'),
				'office_in_charge'  =>$this->input->post('office_in_charge'),	
				'address'       		=>$this->input->post('address'),
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
		$this->form_validation->set_rules('name','Branch Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('company','Company','trim|required|min_length[3]');
		$this->form_validation->set_rules('office_in_charge','Office In Charge','trim|required|min_length[2]');
		$this->form_validation->set_rules('address','Address','trim|required|min_length[6]');
		$this->form_validation->set_rules('mobile_no','Mobile No','trim|required|max_length[11]');
		$this->form_validation->set_rules('telephone_no','Telephone No','trim|required|max_length[13]');
		
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
				'company'     			=>$this->input->post('company'),
				'name' 		 					=>$this->input->post('name'),
				'office_in_charge'  =>$this->input->post('office_in_charge'),	
				'address'    				=>$this->input->post('address'),
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

	public function client_index()
	{
		//print_r($this->session->all_userdata());

		$this->load->library('pagination');

 		$total_rows = $this->db->count_all('clients');
 		$limit = 1;

 		$start = $this->uri->segment(3);
 	 
 		$this->db->limit($limit, $start);
  	$query = $this->db->get('clients');
  	$data['clients'] = $query->result();

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

    $data['clients2'] = $this->master_model->get_clients();
    $data['main_content'] = 'master/client/index';
		$this->load->view('layouts/main', $data);
	}

	public function client_add()
	{

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');

		$config = array(
			'upload_path' => 'assets/upload/',
			'allowed_types' => 'jpg|jpeg|png',
			'max_size' => 0,
			//'filename' => url_title($this->input->post('file'))
			);
		$this->load->library('upload', $config);

		if($this->form_validation->run() == FALSE )
		{
			$data['main_content'] = 'master/client/add';
			$data['branches'] = $this->master_model->get_branches();
			$data['payments'] = $this->master_model->get_payment_source();
			$data['pensions'] = $this->master_model->get_pension_type();
			$this->session->set_flashdata('error.msg', 'Required All Fields');
			$this->load->view('layouts/main', $data);

		}
		else
		{
			$this->upload->do_upload('file');
			$birthdate = date('Y-m-d', strtotime($this->input->post('birthdate')));
			$data = array
			(
				'picture'  					=> $this->upload->file_name,
				'first_name' 				=> $this->input->post('first_name'),
				'middle_name' 			=> $this->input->post('middle_name'),
				'last_name' 				=> $this->input->post('last_name'),
				'birthdate' 				=> $birthdate,
				'gender' 						=> $this->input->post('gender'),
				'civil_status' 			=> $this->input->post('civil_status'),
				'address' 					=> $this->input->post('address'),
				'telephone_no'		 	=> $this->input->post('telephone_no'),
				'mobile_no' 				=> $this->input->post('mobile_no'),
				'res_cert_no' 			=> $this->input->post('res_cert_no'),
				'pension_amount' 		=> $this->input->post('pension_amount'),
				'bank_branch' 			=> $this->input->post('bank_branch'),
				'payment_type_id'   => $this->input->post('payment_type'),
				'withdrawal_day'    => $this->input->post('withdrawal_day'),
				'payment_source_id' => $this->input->post('payment_source'),
				'pension_type_id' 	=> $this->input->post('pension_type'),
				'group'             => $this->input->post('group'),
				'is_active' 				=> $this->input->post('is_active'),
				'branch_id' 				=> $this->input->post('branch_id')
			);
			

			if($this->master_model->client_add($data))
			{
				$this->session->set_flashdata('client_added', 'Client Successfully Added!');

				redirect('master/client_index');
			}
		}
	}

	public function client_delete($id)
	{
		if($this->master_model->client_delete($id))
		{
			$this->session->set_flashdata('client_deleted', 'Client Successfully Deleted!');

			redirect('master/client_index');
		}

	}

	public function client_edit($id)
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|min_length[6]');

		/*$config = array(
			'upload_path' => 'assets/upload/',
			'allowed_types' => 'jpg|jpeg|png',
			'max_size' => 0,
			'overwrite' =>TRUE
			//'filename' => url_title($this->input->post('file'))
			);
		$this->load->library('upload', $config);
	  */

		if($this->form_validation->run() == FALSE )
		{
			$data['branches'] = $this->master_model->get_branches();
			$data['payments'] = $this->master_model->get_payment_source();
			$data['pensions'] = $this->master_model->get_pension_type();
			$data['client']   = $this->master_model->get_client($id);
			
			$data['main_content'] = 'master/client/edit';
			
			$this->load->view('layouts/main', $data);
		}
		else
		{
			//$this->upload->do_upload('file');
			//$this->upload->overwrite = true;
			$birthdate = date('Y-m-d', strtotime($this->input->post('birthdate')));
			$data = array
				(
					//'picture'  				=> $this->upload->file_name,
					'first_name' 				=> $this->input->post('first_name'),
					'middle_name' 			=> $this->input->post('middle_name'),
					'last_name' 				=> $this->input->post('last_name'),
					'birthdate' 				=> $birthdate,
					'gender' 						=> $this->input->post('gender'),
					'civil_status' 			=> $this->input->post('civil_status'),
					'address' 					=> $this->input->post('address'),
					'telephone_no'		 	=> $this->input->post('telephone_no'),
					'mobile_no' 				=> $this->input->post('mobile_no'),
					'res_cert_no' 			=> $this->input->post('res_cert_no'),
					'pension_amount' 		=> $this->input->post('pension_amount'),
					'bank_branch' 			=> $this->input->post('bank_branch'),
					'payment_type_id'   => $this->input->post('payment_type'),
					'withdrawal_day'    => $this->input->post('withdrawal_day'),
					'payment_source_id' => $this->input->post('payment_source'),
					'pension_type_id' 	=> $this->input->post('pension_type'),
					'group'	            => $this->input->post('group'),
					'is_active' 				=> $this->input->post('is_active'),
					'branch_id' 				=> $this->input->post('branch_id')
				);
			
			if($this->master_model->client_edit($id, $data))
			{
				$this->session->set_flashdata('client_updated', 'Client has been updated');
				
				redirect('master/client_index');
			}
		}
	}
	

	
}	