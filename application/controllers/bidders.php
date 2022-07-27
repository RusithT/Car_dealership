<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bidders extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
        if ( ! $this->session->userdata('isLogin')) { 
            redirect('login');
        }
		
		$this->load->model('Model_bidnow');
       
	}

    public function index()
    {
        $data['bidders'] = $this->Model_bidnow->bidders_list();

        $this->load->view('header');
        $this->parser->parse('bidders', $data);
        $this->load->view('footer');
    }
}