<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // you have missed this line.
        $this->sd = $this->session->userdata();
        $this->load->model('model_vehicle');
    }


    public function index()
    {
        if (isset($this->sd['isLogin'])) {
            $this->load->view('header');

            $data['bid_vehicle'] = $this->model_vehicle->bid_vehicle();
            $this->parser->parse('auction', $data);
            $this->load->view('footer');
        } else {
            redirect('Login');
        }
    }
}
