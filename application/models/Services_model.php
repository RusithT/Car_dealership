<?php
class Services_model extends CI_Model {

	public function __construct(){
		$this->load->database();
        $this->sd = $this->session->userdata();
        $this->max_no=$this->max_no();
	}

	public function create(){


		$data = array(
			'id'=> $this->max_no,
            'full_name'=> $this->input->post('fname'),
            'phone_no'=> $this->input->post('yourphone'),
            'email'=> $this->input->post('youremail'),
            'vtype'=> $this->input->post('vehitype'),
            'vmodel'=> $this->input->post('vehimodel'),
            'vyear'=> $this->input->post('vehiyear'),
            'appoint_date'=> $this->input->post('appdate'),
            'serv_type'=> $this->input->post('service_type'),
            
			);

		
			$insert =$this->db->insert('service_appoinment', $data);
			if($insert){
				return "ok";
			}else{
				$d="insert_fail";
				return $d;
			}
		
	}


    
    public function max_no()
    {
        $sql = "SELECT ifnull(MAX(id),0)+1 AS  max_no FROM `service_appoinment`";
        $query = $this->db->query($sql)->first_row()->max_no;

        return $query;
    }


	
}