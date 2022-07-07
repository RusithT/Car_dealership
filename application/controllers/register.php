<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
	public function RegisterUser()
	{
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('nic', 'NIC', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('bdate', 'bdate', 'required');
		$this->form_validation->set_rules('number', 'Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'passconf', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {

			$this->load->model('Model_user');
			$response = $this->Model_user->insertuserdata();
			if ($response) {
				$this->session->set_flashdata('msg', 'Registerd Sucessfully..please login');
				redirect('register');
			}
		}
	}
}
