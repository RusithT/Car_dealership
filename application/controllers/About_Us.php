<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_Us extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('about_us');
        $this->load->view('footer');
    }
}
