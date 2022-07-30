<?php
class Lease_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function select_type(){

        $sql="SELECT * FROM `vehicle_type`";
        $query = $this->db->query($sql)->result();
        
        $option="<option class='dropdown-item option1' value='0' style='color:white;' >SELECT TYPE</option>";
        foreach($query as $row){
            $option.="<option class='dropdown-item' value='".$row->id."'>".$row->type."</option>"; 
        }
        return ($option);
		
	}

	public function load_brands(){

        $sql="SELECT * FROM `vehicle_brand` WHERE type='".$_POST['type']."'";
        $query = $this->db->query($sql)->result();
        
        $option="<option class='dropdown-item option1' value='0' style='color:white;' >SELECT BRAND</option>";
        foreach($query as $row){
            $option.="<option class='dropdown-item' value='".$row->id."'>".$row->brand."</option>"; 
        }
        return ($option);
		
	}
	
    public function load_models(){

        $sql="SELECT * FROM `vehicle_model` WHERE brand='".$_POST['brand']."'";
        $query = $this->db->query($sql)->result();
        
        $option="<option class='dropdown-item option1' value='0' style='color:white;' >SELECT MODEL</option>";
        foreach($query as $row){
            $option.="<option class='dropdown-item' value='".$row->id."'>".$row->model."</option>"; 
        }
        return ($option);
		
	}

    public function load_item(){

        $sql="SELECT * FROM `vehicles` WHERE type_id='".$_POST['type1']."' AND brand_id='".$_POST['brand1']."' AND model_id='".$_POST['model1']."' ";
        $query = $this->db->query($sql)->result();
        
        $option="<option class='dropdown-item option1' value='0' style='color:white;' >SELECT Item</option>";
        foreach($query as $row){
            $option.="<option class='dropdown-item' value='".$row->chesis_no."'>".$row->chesis_no."</option>"; 
        }
        return ($option);
		
	}
    public function lease_rate(){

         $sql1="SELECT * FROM `lease_rate` WHERE v_type='".$_POST['type1']."' AND v_brand='".$_POST['brand1']."' AND v_model='".$_POST['model1']."'AND reg_status='".$_POST['status']."' AND conditions='".$_POST['condition']."' ";
         $query = $this->db->query($sql1)->first_row()->rate;
        
       
         return ($query);
		
	}
    public function full_ammount(){

        $sql1="SELECT * FROM `vehicles` WHERE type_id='".$_POST['type1']."' AND brand_id='".$_POST['brand1']."' AND model_id='".$_POST['model1']."'AND chesis_no='".$_POST['chesis_no']."' ";
        $query = $this->db->query($sql1)->row()->selling_price;
       
      
        return ($query);
       
   }
    public function lease_vehicles(){

        $sql1="SELECT * FROM `vehicles` WHERE type_id='".$_POST['type1']."' AND brand_id='".$_POST['brand1']."' AND model_id='".$_POST['model1']."'AND chesis_no='".$_POST['chesis_no']."' ";
        $row1 = $this->db->query($sql1)->row();
        
        $option="<table class='table table-bordered' style='position:relative;'>";
        $option.="<thead class='thead-dark'>";
        $option.="<tr>";
        $option.="<th style='width: 40%;'>OVERVIEW</th>";
        $option.="<th style='width: 30%;'>Vehicle 1</th>";
        $option.="</tr>";
        $option.="</thead>";
     //   foreach($query as $row){
            $option.="<tr>";
            $option.="<td>Selling Price</td>";
            $option.="<td>".$row1->selling_price."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Milage</td>";
            $option.="<td>".$row1->mileage."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Color</td>";
            $option.="<td>".$row1->color."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Registration Year</td>";
            $option.="<td>".$row1->registration_year."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Gear</td>";
            $option.="<td>".$row1->gear."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Doors</td>";
            $option.="<td>".$row1->doors."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Seats</td>";
            $option.="<td>".$row1->seats."</td>";
            $option.="</tr>";
            
            $option.="<tr>";
            $option.="<td>Tank</td>";
            $option.="<td>".$row1->tank."</td>";
            $option.="</tr>";
     //   }
        return ($option);
		
	}
    public function create(){


		$data = array(
			'fullname'=> $this->input->post('fullname'),
            'nameini'=> $this->input->post('nameinitials'),
            'nic'=> $this->input->post('nic'),
            'nicimg1'=> $this->input->post('nicimg1'),
            'nicimg2'=> $this->input->post('nicimg2'),
            'bdate'=> $this->input->post('bdate'),
            'email'=> $this->input->post('email'),
            'address'=> $this->input->post('address'),
            'gender'=>$this->input->post('gender'),

            'guaranter1'=> $this->input->post('guaranter1'),
            'guarantname'=> $this->input->post('guarantname'),
            'gnic'=> $this->input->post('gnic'),
            'gnicf'=> $this->input->post('gnicf'),
            'gnicb'=> $this->input->post('gnicb'),
            'gbdate'=> $this->input->post('gbdate'),
            'gemail'=> $this->input->post('gemail'),
            'gaddress'=> $this->input->post('gaddress'),
            'genderg'=>$this->input->post('genderg'),

            'gfname2'=> $this->input->post('gfname2'),
            'gnamein'=> $this->input->post('gnamein'),
            'gnic2'=> $this->input->post('gnic2'),
            'gnicf2'=> $this->input->post('gnicf2'),
            'gnicb2'=> $this->input->post('gnicb2'),
            'gbdate2'=> $this->input->post('gbdate2'),
            'gemail2'=> $this->input->post('gemail2'),
            'gaddress2'=> $this->input->post('gaddress2'),
            'genderg2'=>$this->input->post('genderg2'),
			);

		$this->db->where('email =', $this->input->post('email'));
		$query = $this->db->get('individual_lease');
		if($query->num_rows()>0){
			$d="already_exist";
			return $d;
		}else{
			$insert =$this->db->insert('individual_lease', $data);
			if($insert){
				return "ok";
			}else{
				$d="insert_fail";
				return $d;
			}
		}
	}
}
