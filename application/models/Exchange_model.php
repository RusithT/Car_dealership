<?php
class Exchange_model extends CI_Model {

	public function __construct(){
		$this->load->database();
		$this->max_no=$this->max_no();
		$this->sd = $this->session->userdata();
	}


	public function select_type(){

        $sql="SELECT * FROM `vehicle_type`";
        $query = $this->db->query($sql)->result();
        
        $option="<option class='dropdown-item option1 required' value='' >SELECT TYPE</option>";
        foreach($query as $row){
            $option.="<option class='dropdown-item' value='".$row->id."'>".$row->type."</option>"; 
        }
        return ($option);
		
	}

	public function load_brands(){

        $sql="SELECT * FROM `vehicle_brand` WHERE type='".$_POST['type']."'";
        $query = $this->db->query($sql)->result();
        
        $option="<option class='dropdown-item option1 required' value='' >SELECT BRAND</option>";
        foreach($query as $row){
            $option.="<option class='dropdown-item' value='".$row->id."'>".$row->brand."</option>"; 
        }
        return ($option);
		
	}
	
    public function load_models(){

        $sql="SELECT * FROM `vehicle_model` WHERE brand='".$_POST['brand']."'";
        $query = $this->db->query($sql)->result();
        
        $option="<option class='dropdown-item option1 required' value='' >SELECT MODEL</option>";
        foreach($query as $row){
            $option.="<option class='dropdown-item' value='".$row->id."'>".$row->model."</option>"; 
        }
        return ($option);
		
	}

	public function create(){
        $this->load->helper('url');

		

		$config['upload_path'] = 'uploads/vehi_exchange';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 1024 * 8;
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('fileb');
		$this->upload->do_upload('filei');

		if (!$this->upload->do_upload('filef') && !$this->upload->do_upload('fileb') && !$this->upload->do_upload('filei'))
		{
			$file_error = "true";
			$msg = $this->upload->display_errors();
			$file_name = "";
		}
		else
		{
			$file_error = "false";
			$file_data = $this->upload->data();
			$file_name = $file_data['file_name'];
		}
		

		$data = array(
			'id' => $this->max_no,
			'type'=> $this->input->post('vtype'),
            'brand'=> $this->input->post('vbrand'),
            'model'=> $this->input->post('vmodel'),
            'chnum'=> $this->input->post('vehichnum'),
            'mileage'=> $this->input->post('vehimileage'),
            'category'=> $this->input->post('vcategory'),
            'fuel'=> $this->input->post('futype'),
            'eng_no'=> $this->input->post('eng_no'),
			'gear'=> $this->input->post('gear_type'),
            'color'=> $this->input->post('colors'),
            'door'=> $this->input->post('doors'),
            'reg_year'=> $this->input->post('reg_year'),
            'seat'=> $this->input->post('num_seats'),
            'image1'=> base_url().'uploads/vehi_exchange/'.$file_name,
            'image2'=> base_url().'uploads/vehi_exchange/'.$file_name,
            'image3'=> base_url().'uploads/vehi_exchange/'.$file_name,
            'tank'=> $this->input->post('tank_cap'),
            'buy'=> $this->input->post('by_price'),
            'value'=> $this->input->post('vehival'),
			'email'=> $this->sd['email']
			);

		$this->db->where ('id',$this->max_no);
		$query = $this->db->get('vehi_exchange');
		if($query->num_rows()>0){
			$d="already_exist";
			return $d;
		}else if($file_error == "true"){
			return "img_insert_fail";
		} else{
			$insert =$this->db->insert('vehi_exchange', $data);
			if($insert){
				return "ok";
			}else{
				$d="insert_fail";
				return $d;
			}
		}
	}


	public function max_no()
    {
        $sql = "SELECT ifnull(MAX(id),0)+1 AS  max_no FROM `vehi_exchange`";
        $query = $this->db->query($sql)->first_row()->max_no;

        return $query;
    }
	
	
}