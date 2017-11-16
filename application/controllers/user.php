<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('user/login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->user_model->login($username,$password);

			if($user)
			{
				$user_data = array(
					'id'       => $user->id,
					'username' => $user->username,
					'password' => $user->password,
					'access'   => $user->access,
					'branch'   => NULL
					
				);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success', 'You are now Logged in.');
				$this->session->set_flashdata('login_successs', "Logged in as " .$username. "");

				redirect('user/account');	
			}			
			else
			{
				$this->session->set_flashdata('login_failed', 'Incorrect Username & Password.');
				redirect('user/login');
			}
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

	    redirect('user/login');
 	}

	public function index()
	{
		/*
		if($_POST)
		{
			$this->input->post('branch');
			$this->session->set_userdata('branch',$this->input->post('branch'));

			$data['main_content'] = 'user/index';
			$this->load->view('layouts/main', $data);
			$this->session->unset_userdata('branch',$this->input->post('branch'));

		}
		*/
		if($_POST)
		{
			$this->input->post('branch');
			$this->session->set_userdata('branch', $this->input->post('branch'));
			//$this->session->set_flashdata('branch_name', "Activate Branch " .$branch. "" );
		}
		else 
		{
		 $this->session->unset_userdata('branch');
		
		}
		 $data['main_content'] = 'user/index';
		 $this->load->view('layouts/main', $data);
		
	}

	public function account()
	{
		$data['main_content'] = 'user/account';
		$data['branches'] = $this->master_model->get_branches();
		$this->session->set_flashdata("branch_name", "Your in Branch");
		$this->load->view('layouts/main', $data);
	}

}