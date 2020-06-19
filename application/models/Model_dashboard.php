<?php

class Model_dashboard extends CI_Model{


    function get_profile($username)
    {
        $query  ="SELECT * from customer where username='$username'";
        return $this->db->query($query);
    }
    
    
    
       
}