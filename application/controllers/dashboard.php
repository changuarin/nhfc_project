<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['main_content'] = 'dashboard/index';
		
		$this->load->view('layouts/main', $data);
	}

	// Landing Page of Accounting , Collection , Sales
	public function landingpage()
	{
		$data['main_content'] = 'modules/dashboard';

		$this->load->view('layouts/main', $data);
	}
}	