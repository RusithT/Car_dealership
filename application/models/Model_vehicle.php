<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_vehicle extends CI_Model {

	function __Construct()
	{
	 parent::__Construct ();
	 $this->load->database();
   }

	
	public function getAll()
	{
		// $result = $this->db->get('vehicles');
		$this->db->select('vehicles.*,vehicle_type.type,vehicle_brand.brand,vehicle_model.model');
        $this->db->from('vehicles');
		$this->db->join('vehicle_type','vehicle_type.id=vehicles.type_id');
		$this->db->join('vehicle_brand','vehicle_brand.id=vehicles.brand_id');
		$this->db->join('vehicle_model','vehicle_model.id=vehicles.model_id');
        $this->db->where('sold_date',NULL);

        $result = $this->db->get();
		return $result->result_array();
	}

public function bid_vehicle()
	{
		// $result = $this->db->get('vehicles');
		$this->db->select('vehicles.*,vehicle_type.type,vehicle_brand.brand,vehicle_model.model');
        $this->db->from('vehicles');
		$this->db->join('vehicle_type','vehicle_type.id=vehicles.type_id');
		$this->db->join('vehicle_brand','vehicle_brand.id=vehicles.brand_id');
		$this->db->join('vehicle_model','vehicle_model.id=vehicles.model_id');
        $this->db->where('status','not available');

        $result = $this->db->get();
		return $result->result_array();
	}

}