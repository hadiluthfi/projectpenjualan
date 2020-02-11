<?php

class Model_dashboard extends CI_Model{


    function get_profile($username)
    {
        $query  ="SELECT * from pasien where username='$username'";
        return $this->db->query($query);
    }
    
    
    
       
}