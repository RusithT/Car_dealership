<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parts extends CI_Controller {

	
	 
	public function index()
	{
		$this->load->view('header');
		$this->load->view('parts');
		$this->load->view('footer');
	}
}
