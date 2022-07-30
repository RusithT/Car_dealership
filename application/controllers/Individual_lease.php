<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individual_lease extends CI_Controller {
	
	function __Construct()
	{
	 parent::__Construct ();
	 $this->load->database();
	 $this->load->model('lease_model');
   }

	public function index(){
		$this->load->view('header');
		$this->load->view('individual_lease');
		$this->load->view('footer');
	}

	public function create()
	{   

		if($this->input->post('submit')!==null){
		$vl=$this->lease_model->create();
		
		if($vl=='ok'){
			$data = array('success' => true, 'msg'=> '<script>swal({
				title: "Success! ",
				text: "Your work has been saved!",
				icon: "success",
			   
				dangerMode: false,
			  }).then((willDelete) => {
				if (willDelete) {
				  window.location = "'.base_url().'";
				} 
			  }); </script>');
		}else if($vl=='already_exist'){
			$data = array('success' => false, 'typ'=>true, 'msg'=> "<script>swal({
				title: 'Oops! User already exists',
				
				icon: 'error',
				
				dangerMode: true,
			});</script>");
		}else{
			$data = array('success' => false, 'typ'=>true, 'msg'=> "<script>swal({
				title: 'Oops! Your Account Not Created',
				
				icon: 'error',
				
				dangerMode: true,
			});</script>");
		}

		echo json_encode($data);
		
		}else{
			redirect(base_url().'individual_lease');
		}
	}
}
