<?php
class Exchange_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function create(){
        $this->load->helper('url');

		$config['upload_path'] = 'uploads/vehicles';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 1024 * 8;
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);



		if (!$this->upload->do_upload('file'))
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
			'type'=> $this->input->post('vehitype'),
            'brand'=> $this->input->post('vehibrand'),
            'model'=> $this->input->post('vehimodel'),
            'chnum'=> $this->input->post('vehichnum'),
            'mileage'=> $this->input->post('vehimileage'),
            'category'=> $this->input->post('vehicategory'),
            'fuel'=> $this->input->post('futype'),
            'eng_no'=> $this->input->post('eng_no'),
            'color'=> $this->input->post('colors'),
            'door'=> $this->input->post('doors'),
            'reg_year'=> $this->input->post('reg_year'),
            'seat'=> $this->input->post('num_seats'),
            'image1'=> base_url().'uploads/vehi_exchange/'.$file_name,
            'image2'=> base_url().'uploads/vehi_exchange/'.$file_name,
            'image3'=> base_url().'uploads/vehi_exchange/'.$file_name,
            'tank'=> $this->input->post('tank_cap'),
            'buy'=> $this->input->post('by_price'),
            'value'=> sha1($this->input->post('vehival'))
			);

		$query = $this->db->get('vehi_exchange');
		if($query->num_rows()>0){
			$d="already_exist";
			return $d;
		}else{
			$insert =$this->db->insert('vehi_exchange', $data);
			if($insert){
				return "ok";
			}else{
				$d="insert_fail";
				return $d;
			}
		}
	}

	
	
}