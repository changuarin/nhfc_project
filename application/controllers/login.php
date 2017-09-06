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
		$data['main_content'] = 'login/view';
		$data['users'] = $this->user_model->get_users();
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

	/* public function edit($id)
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'trim"|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim"|required');

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
				$this->session->set_flashdata('edit_msg', 'User Successfully Edited.');
				redirect('login/get_users');
			}
		}	
	}
	*/
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