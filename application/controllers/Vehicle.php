<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vehicle extends CI_Controller
{

	public function __construct()
	{	 parent::__Construct ();	
		$this->load->model('model_vehicle');
	}

	public function index()
	{
		$this->load->view('header');

		$data['vehicles'] = $this->model_vehicle->getAll();
		$this->parser->parse('vehicle', $data);
		$this->load->view('footer');
	}
}

