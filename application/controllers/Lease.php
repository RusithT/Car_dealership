<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lease extends CI_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('lease');
		$this->load->view('footer');
	}
}
