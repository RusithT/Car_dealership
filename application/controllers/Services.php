<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {


	public function __construct(){
		parent::__construct(); // you have missed this line.
		$this->load->model('Services_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('services');
		$this->load->view('footer');
		

	}


	public function create()
	{   

		if($this->input->post('submit')!==null){
		$vl=$this->Services_model->create();
		
		if($vl=='ok'){
			$data = array('success' => true, 'msg'=> '<script>swal({
				title: "Success! ",
				text: "Your work has been saved!",
				icon: "success",
			   
				dangerMode: false,
			  }).then((willDelete) => {
				if (willDelete) {
				  window.location = "'.base_url().'services";
				} 
			  }); </script>');
		}else{
			$data = array('success' => false, 'typ'=>true, 'msg'=> "<script>swal({
				title: 'Oops! work has been not saved',
				
				icon: 'error',
				
				dangerMode: true,
			});</script>");
		}

		echo json_encode($data);
		
		}else{
			redirect(base_url().'Register');
		}
	}
}
