<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {
	public function index(){
		$this->load->view('vehicle');
		$this->load->view('footer');
	}
}
