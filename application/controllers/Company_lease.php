<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_lease extends CI_Controller {
	public function index(){
        $this->load->view('header');
		$this->load->view('company_lease');
        $this->load->view('footer');
	}
}
