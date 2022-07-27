<?php
class Contact_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function create(){


		$data = array(
			'fname'=> $this->input->post('fullname'),
            'email'=> $this->input->post('email'),
            'subject'=> $this->input->post('subject'),
            'message'=> $this->input->post('message'),
        
			);

		
			$insert =$this->db->insert('message', $data);
			if($insert){
				return "ok";
			}else{
				$d="insert_fail";
				return $d;
			}
		
	}

	
	
}