<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BidNow extends CI_Controller
{

    public function __construct()
    {
        parent::__construct(); // you have missed this line.
        $this->sd = $this->session->userdata();
        $this->load->model('model_vehicle');
        $this->load->model('Model_bidnow');
    }


    public function index()
    {
        if (isset($this->sd['isLogin'])) {
            $this->load->view('header');
            $data['bid_vehicle'] = $this->model_vehicle->bid_vehicle();
            $this->parser->parse('BidNow', $data);
            $this->load->view('footer');
        } else {
            redirect('Login');
        }
       
    }


    public function create()
	{   

		if($this->input->post('submit')!==null){
		$vl=$this->Model_bidnow->create();
		
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
			redirect(base_url().'Register');
		}
	}
}
