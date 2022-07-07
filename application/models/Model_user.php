<?php
class Model_user extends CI_Model
{
    function insertuserdata()
    {

        $data = array(
            'firstname'=> $this->input->post('firstname',TRUE),
            'lastname'=> $this->input->post('lastname',TRUE),
            'nic'=> $this->input->post('nic',TRUE),
            'username'=> $this->input->post('username',TRUE),
            'bdate'=> $this->input->post('bdate',TRUE),
            'number'=> $this->input->post('number',TRUE),
            'email'=> $this->input->post('email',TRUE),
            'address'=> $this->input->post('address',TRUE),
            'gender'=> $this->input->post('gender',TRUE),
            'password'=> sha1($this->input->post('password',TRUE))
        );
        return $this->db->insert('users',$data);
    }
}
