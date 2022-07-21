<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare extends CI_Controller {

	function __Construct()
	{
	 parent::__Construct ();
	 $this->load->database();
	 $this->load->model('Compare_model');
   }

	public function index(){
		$this->load->view('header');
		$this->load->view('compare');
		$this->load->view('footer');
	}

	public function select_type(){
		$res['data']=$this->Compare_model->select_type();
		echo json_encode($res);
	}

	public function load_brands(){
		$res['data']=$this->Compare_model->load_brands();
		echo json_encode($res);
	}

	public function load_models(){
		$res['data']=$this->Compare_model->load_models();
		echo json_encode($res);
	}
	public function select_type2(){
		$res['data']=$this->Compare_model->select_type2();
		echo json_encode($res);
	}

	public function load_brands2(){
		$res['data']=$this->Compare_model->load_brands();
		echo json_encode($res);
	}

	public function load_models2(){
		$res['data']=$this->Compare_model->load_models();
		echo json_encode($res);
	}
	public function compare_vehicles(){
		$res['data']=$this->Compare_model->compare_vehicles();
		echo json_encode($res);
	}







}
