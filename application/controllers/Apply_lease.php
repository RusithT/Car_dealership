<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_lease extends CI_Controller {
	public function index(){
		$this->load->view('apply_lease');
	}
}
