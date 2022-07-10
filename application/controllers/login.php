<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
        $session = $this->session->userdata('isLogin');

        if($session == FALSE) {
            $this->load->view('login');
        } else {
            redirect('user_dashboard');
        }
	}
        
       
    //just to check if empty, if not then verify function call and verified hoile returns to this function
    public function checklogin() {   // fields name, Boxes name to show, the checks functions
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_verifylogin');
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } 
        else {
            redirect('user_dashboard');
        }
    }
        
        
    public function verifylogin() {
        $email= $this->input->post('email');
        $password= sha1($this->input->post('password'));
        
        //Load the Login model for database check
        $this->load->model('model_login');
        $result= $this->model_login->login($email,$password);
        
        if($result){
            foreach ($result as $user){
                $s = array();
                $s['id'] = $user->id;
                $s['fname'] = $user->fname;
                $s['lname'] = $user->lname;
                $s['nic'] = $user->nic;
                $s['uname'] = $user->uname;
                $s['email'] = $user->email;
                $s['isLogin'] = 'true';

                $this->session->set_userdata($s);
            }
            $res=array('success' => true);
            echo json_encode($res);
        
        } else {
           // $this->form_validation->set_message('verifylogin', 'Incorrect Login credentials');
            $res = array('success' => false, 'typ'=>true, 'msg'=> "<script>swal({
            title: 'Oops! Wrong Email or Password. ',
            
            icon: 'error',
            
            dangerMode: true,
        });</script>");
            echo json_encode($res);
        }
    }
    public function LogoutUser()
	{	
         $this->session->unset_userdata('id');
         $this->session->unset_userdata('fname');
         $this->session->unset_userdata('lname');
         $this->session->unset_userdata('nic');
         $this->session->unset_userdata('uname');
         $this->session->unset_userdata('email');
         $this->session->unset_userdata('isLogin');
         redirect('dashboard');
	}
}