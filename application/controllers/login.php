<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/index');
	}

	public function login_user()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('login_fail','Please Fill All Fields.');
			redirect('login/index');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->user_model->login_user($username,$password);

			if($user)
			{
				$user_data = array
				(
					'id'       => $user->id,
					'username' => $user->username,
					'password' => $user->password,
					'access'   => $user->access
				);
				$this->session->set_userdata($user_data);

				$this->session->set_flashdata('login_success', 'You are now Logged in.');
				$this->session->set_flashdata('login_successs', "Logged in as " .$username. "");

				if($this->session->userdata('access') == admin)
				{
					redirect('dashboard/index');
				}
				elseif($this->session->userdata('access') == accounting)
				{
					redirect('dashboard/landingpage');
				}
				elseif($this->session->userdata('access') == collection)
				{
					redirect('dashboard/landingpage');
				}
				elseif($this->session->userdata('access') == sales)
				{
					redirect('dashboard/landingpage');
				}
			}			
			else
			{
				$this->session->set_flashdata('login_failed', 'Incorrect Username & Password.');
				redirect('login/index');
			}
		}
	}

	public function get_users()
	{
		 $this->load->library('pagination');

	 	 $total_rows = $this->db->count_all('users');
	 	 $limit = 2;

	 	 $start = $this->uri->segment(3);

	 	 $this->db->limit($limit, $start);
	     $query = $this->db->get('users');
	     $data['users'] = $query->result();

	     $config['base_url'] = 'http://localhost/nhfc/index.php/login/get_users/';
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
	    $data['main_content'] = 'login/view';
		$this->load->view('layouts/main', $data);	
	}

	public function add()
	{
		$this->form_validation->set_rules('first_name','First Name','trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'login/add';
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
			if($this->user_model->add_user($data))
			{
			$this->session->set_flashdata('user_added','User Successfully Added.');
			redirect('login/get_users');

			}	
		}	
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|min_length[6]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['user'] = $this->user_model->get_user($id);
			
			$data['main_content'] = 'login/edit';
			
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
			
			if($this->user_model->edit_user($id, $data))
			{
				$this->session->set_flashdata('user_updated', 'User has been updated');
				
				redirect('login/get_users');
			}
		}
	}

	public function delete_user($id)
	{
		if($this->user_model->delete_user($id))
		{
			$this->session->set_flashdata('user_deleted', 'User Successfully Deleted.');

			redirect('login/get_users');
		}
	}

	public function logout()
  	{
	    $this->session->unset_userdata('id');
	    $this->session->unset_userdata('username');
	    $this->session->unset_userdata('password');
	    $this->session->unset_userdata('access');

	    $this->session->sess_destroy();

	    $this->session->set_flashdata('logout_msg', 'Logged Out.');

	    redirect('login/index');
 	}
}