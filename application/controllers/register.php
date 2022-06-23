<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	
	 
	public function index()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
}
