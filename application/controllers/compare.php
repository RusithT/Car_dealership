<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare extends CI_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('compare');
		$this->load->view('footer');
	}
}
