<?php
class Model_bidnow extends CI_Model {

	public function __construct(){
		$this->load->database();
        $this->sd = $this->session->userdata();
        $this->max_no=$this->max_no();
	}

	public function create(){


		$data = array(
			'id'=> $this->max_no,
            'bidder_uid'=> $this->sd['id'],
            'vehicle_id'=> $this->input->post('vehicle_id'),
            'bid_amount'=> $this->input->post('bid_amount'),
            'bid_date'=> date('Y-m-d'),
            'start_bid_amo'=> $this->input->post('start_bid'),
            
			);

		
			$insert =$this->db->insert('bidder_list', $data);
			if($insert){
				return "ok";
			}else{
				$d="insert_fail";
				return $d;
			}
		
	}


    
    public function max_no()
    {
        $sql = "SELECT ifnull(MAX(id),0)+1 AS  max_no FROM `bidder_list`";
        $query = $this->db->query($sql)->first_row()->max_no;

        return $query;
    }

    public function bidders_list()	{
		$this->db->select('bidder_list.*,regusers.fname,regusers.lname,vehicle_type.type,vehicle_brand.brand,vehicle_model.model');
        $this->db->from('bidder_list');
		$this->db->join('regusers','regusers.id=bidder_list.bidder_uid');
		$this->db->join('vehicles','vehicles.vehicle_id=bidder_list.vehicle_id');
        $this->db->join('vehicle_type','vehicle_type.id=vehicles.type_id');
		$this->db->join('vehicle_brand','vehicle_brand.id=vehicles.brand_id');
		$this->db->join('vehicle_model','vehicle_model.id=vehicles.model_id');
		

        $result = $this->db->get();
		return $result->result_array();
	}
	
	
}