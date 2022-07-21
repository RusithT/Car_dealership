<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();// you have missed this line.
		$this->sd = $this->session->userdata();
	}


	public function index(){
		
		if(isset($this->sd['isLogin'])){
			$this->load->view('user_dashboard');
		}else{
			redirect('Dashboard');
		}
	}
}
