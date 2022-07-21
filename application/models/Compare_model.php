<?php
class Compare_model extends CI_Model {

	public function __construct(){
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


    public function select_type2(){

        $sql="SELECT * FROM `vehicle_type` WHERE id='".$_POST['type']."'";
        $query = $this->db->query($sql)->result();
        
        $option="<option class='dropdown-item option1' value='0' style='color:white;' >SELECT TYPE</option>";
        foreach($query as $row){
            $option.="<option class='dropdown-item' value='".$row->id."'>".$row->type."</option>"; 
        }
        return ($option);
		
	}




	public function compare_vehicles(){

        $sql1="SELECT * FROM `vehicles` WHERE vehicle_id='".$_POST['type1']."' AND brand_id='".$_POST['brand1']."' AND model_id='".$_POST['model1']."'";
        $row1 = $this->db->query($sql1)->row();
        
        $sql2="SELECT * FROM `vehicles` WHERE vehicle_id='".$_POST['type2']."' AND brand_id='".$_POST['brand2']."' AND model_id='".$_POST['model2']."'";
        $row2 = $this->db->query($sql2)->row();
        
        
        $option="<table class='table table-bordered' style='position:relative;'>";
        $option.="<thead class='thead-dark'>";
        $option.="<tr>";
        $option.="<th style='width: 40%;'>OVERVIEW</th>";
        $option.="<th style='width: 30%;'>Vehicle 1</th>";
        $option.="<th style='width: 30%;'>Vehicle 2</th>";
        $option.="</tr>";
        $option.="</thead>";
     //   foreach($query as $row){
            $option.="<tr>";
            $option.="<td>Category</td>";
            $option.="<td>".$row1->category."</td>";
            $option.="<td>".$row2->category."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Buying Price</td>";
            $option.="<td>".$row1->buying_price."</td>";
            $option.="<td>".$row2->buying_price."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Selling Price</td>";
            $option.="<td>".$row1->selling_price."</td>";
            $option.="<td>".$row2->selling_price."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Milage</td>";
            $option.="<td>".$row1->mileage."</td>";
            $option.="<td>".$row2->mileage."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Color</td>";
            $option.="<td>".$row1->color."</td>";
            $option.="<td>".$row2->color."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Registration Year</td>";
            $option.="<td>".$row1->registration_year."</td>";
            $option.="<td>".$row2->registration_year."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Gear</td>";
            $option.="<td>".$row1->gear."</td>";
            $option.="<td>".$row2->gear."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Doors</td>";
            $option.="<td>".$row1->doors."</td>";
            $option.="<td>".$row2->doors."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Seats</td>";
            $option.="<td>".$row1->seats."</td>";
            $option.="<td>".$row2->seats."</td>";
            $option.="</tr>";
            
            $option.="<tr>";
            $option.="<td>Tank</td>";
            $option.="<td>".$row1->tank."</td>";
            $option.="<td>".$row2->tank."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Engine No</td>";
            $option.="<td>".$row1->engine_no."</td>";
            $option.="<td>".$row2->engine_no."</td>";
            $option.="</tr>";

            $option.="<tr>";
            $option.="<td>Chassis No</td>";
            $option.="<td>".$row1->chesis_no."</td>";
            $option.="<td>".$row2->chesis_no."</td>";
            $option.="</tr>";


     //   }
        return ($option);
		
	}
	
}