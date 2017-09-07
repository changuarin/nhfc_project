<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller 
{
	public function index()
	{
		$data['main_content'] = 'modules/master/client/index';
		$this->load->view('layouts/main', $data);
	}
}	