<?php
    class Moderator {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function showPlants()
        {
            $this->db->query('SELECT * FROM plants inner join seller on plants.seller_id = seller.seller_id WHERE plants.status = "pending" ORDER BY plants.date DESC ');

            $results = $this->db->resultSet();
            
            return $results;
        }

        public function moderatorDetails()
        {
            $this->db->query("SELECT * FROM moderator WHERE id='{$_SESSION['moderator_id']}'");

            $results = $this->db->resultSet();
            
            return $results;
        }



        public function showAllPlants()
        {
            $this->db->query('SELECT * FROM plants inner join seller on plants.seller_id = seller.seller_id && plants.status = "accept" where plants.date > now() -  interval 7 day ORDER BY plants.date DESC ');

            $results = $this->db->resultSet();
            
            return $results;
        }

        public function Acceptplant($data){

            $this->db->query('UPDATE plants SET status = "accept" WHERE plant_id = :plant_id');

            $this->db->bind('plant_id', $data['plant_id']);
             

            if($this->db->execute()){
                return true;
            }else {
                return false;
            }

        }


        public function updateProfile($data){

            $this->db->query("UPDATE moderator SET name = :name, contactNo = :contactNo WHERE id='{$_SESSION['moderator_id']}'");

            $this->db->bind('name', $data['name']);
            $this->db->bind('contactNo', $data['contactNo']);
             

            if($this->db->execute()){
                return true;
            }else {
                return false;
            }

        }

        public function findModeratorPassword(){
        
            $this->db->query("SELECT password FROM moderator Where id = '{$_SESSION['moderator_id']}'");
    
            $results = $this->db->resultSet();
            
            return $results;
        }
    
        public function M_changePassword($data){
    
            $this->db->query("UPDATE moderator SET password = :newpassword WHERE id = '{$_SESSION['moderator_id']}'");
    
            $this->db->bind(':newpassword', $data['npassword']);
         
    
        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
        
        }


    }