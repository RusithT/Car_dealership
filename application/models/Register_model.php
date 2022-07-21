<?php
class Register_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function create(){


		$data = array(
			'fname'=> $this->input->post('firsName'),
            'lname'=> $this->input->post('lastName'),
            'nic'=> $this->input->post('nic'),
            'uname'=> $this->input->post('username'),
            'bdate'=> $this->input->post('bdate'),
            'email'=> $this->input->post('email'),
            'address'=> $this->input->post('address'),
            'gender'=> $this->input->post('gender'),
            'password'=> sha1($this->input->post('password'))
			);

		$this->db->where('email =', $this->input->post('email'));
		$query = $this->db->get('regusers');
		if($query->num_rows()>0){
			$d="already_exist";
			return $d;
		}else{
			$insert =$this->db->insert('regusers', $data);
			if($insert){
				return "ok";
			}else{
				$d="insert_fail";
				return $d;
			}
		}
	}

	
	
}