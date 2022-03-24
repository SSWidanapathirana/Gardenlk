<?php
    class Driver {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function driverInfo()
    {
        $this->db->query("SELECT * FROM driver WHERE email='{$_SESSION['email'] }'");

        $results = $this->db->resultSet();
        
        return $results;
    }

    public function showorderDetails(){
        $this->db->query("SELECT * FROM orders ORDER BY order_id ASC;");

        $results = $this->db->resultSet();
        
        return $results;
    }
    
    public function findDriverPassword(){
        
        $this->db->query("SELECT password FROM driver Where driver_id = '{$_SESSION['driver_id']}'");

        $results = $this->db->resultSet();
        
        return $results;
    }

    public function D_changePassword($data){

        $this->db->query("UPDATE driver SET password = :newpassword WHERE driver_id = '{$_SESSION['driver_id']}'");     
        
        $this->db->bind(':newpassword', $data['new_password']);
     

        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    
    }
    }