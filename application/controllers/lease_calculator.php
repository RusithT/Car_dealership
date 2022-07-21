<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lease_Calculator extends CI_Controller {

	function __Construct()
	{
	 parent::__Construct ();
	 $this->load->database();
	 $this->load->model('lease_model');
   }

	public function index(){
        $this->load->view('header');
		$this->load->view('lease_calculator');
		$this->load->view('footer');
	}

	public function select_type(){
		$res['data']=$this->lease_model->select_type();
		echo json_encode($res);
	}
	public function load_brands(){
		$res['data']=$this->lease_model->load_brands();
		echo json_encode($res);
	}

	public function load_models(){
		$res['data']=$this->lease_model->load_models();
		echo json_encode($res);
	}

    public function item(){
		$res['data']=$this->lease_model->load_item();
		echo json_encode($res);
	}
	public function lease_vehicles(){
		$res['data']=$this->lease_model->lease_vehicles();
		$res['full_amo']=$this->lease_model->full_ammount();
		echo json_encode($res);
	}
	public function lease_rate(){
		$res['data']=$this->lease_model->lease_rate();
		echo json_encode($res);
	}
	public function full_ammount(){
		$res['data']=$this->lease_model->full_ammount();
		echo json_encode($res);
	}
}

