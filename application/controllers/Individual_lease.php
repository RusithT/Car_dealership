<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individual_lease extends CI_Controller {
	public function index(){
        $this->load->view('header');
		$this->load->view('individual_lease');
        $this->load->view('footer');
	}
}
