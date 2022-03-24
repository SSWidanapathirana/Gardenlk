<?php
    class Seller {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        
        public function showAllPlants(){
    
            $this->db->query("SELECT plant_id,pname, quantity, category, description, orderlevel,img1 FROM plants WHERE status = 'accept' AND seller_id=' {$_SESSION['seller_id'] }' ");   
            $results = $this->db->resultSet();
            return $results;
        }

        public function showPlantDetails($id){
    
            $this->db->query("SELECT * FROM plants INNER JOIN seller on plants.seller_id = seller.seller_id WHERE plant_id = :plant_id "); 
            $this->db->bind(':plant_id', $id);  
            $row = $this->db->single();
            return $row;
        }
        public function viewDetail(){
            $this->db->query("SELECT * FROM seller WHERE seller_id=' {$_SESSION['seller_id'] }' ");
            $results = $this->db->resultSet();
            return $results;
        }
        public function viewDash(){
            $this->db->query("SELECT * FROM seller WHERE seller_id=' {$_SESSION['seller_id'] }' ");
            $results = $this->db->resultSet();
            return $results;
        }

        public function addPlant($data){
            $this->db->query('INSERT INTO plants (plant_id,seller_id,pname,img1,img2,img3,img4,price,quantity,category,orderlevel,description) VALUES (:plant_id, :seller_id, :pname, :img1,:img2, :img3,:img4, :price, :quantity, :category,:orderlevel,:description)');
                 
            $this->db->bind('plant_id', $data['plant_id']);
            $this->db->bind('seller_id', $data['seller_id']);
            $this->db->bind('pname', $data['pname']);
            $this->db->bind('img1', $data['img1']);
            $this->db->bind('img2', $data['img2']);
            $this->db->bind('img3', $data['img3']);
            $this->db->bind('img4', $data['img4']);
            $this->db->bind('price', $data['price']);
            $this->db->bind('quantity', $data['quantity']);
            $this->db->bind('category', $data['category']);
            $this->db->bind('orderlevel', $data['orderlevel']);
            $this->db->bind('description', $data['description']);

            if($this->db->execute()){
                return true;
            }else {
                return false;
            }

        }
        
        public function deletePlant(){
            $this->db->query("DELETE * from plant");
        }

        public function flowerPlants(){
    
            $this->db->query('SELECT * FROM plants WHERE category = "flower" ORDER BY plant_id DESC;');   
            $results = $this->db->resultSet();
            return $results;
        }

        public function housePlants(){
    
            $this->db->query('SELECT * FROM plants WHERE category = "indoor" ORDER BY plant_id DESC;');   
            $results = $this->db->resultSet();
            return $results;
        }

        public function outdoorPlants(){
    
            $this->db->query('SELECT * FROM plants WHERE category = "outdoor" ORDER BY plant_id DESC;');   
            $results = $this->db->resultSet();
            return $results;
        }

        public function pottedPlants(){
    
            $this->db->query('SELECT * FROM plants WHERE category = "potted" ORDER BY plant_id DESC;');   
            $results = $this->db->resultSet();
            return $results;
        }

        public function tablePlants(){
    
            $this->db->query('SELECT * FROM plants WHERE category = "table" ORDER BY plant_id DESC;');   
            $results = $this->db->resultSet();
            return $results;
        }

        public function AllPlants(){
    
            $this->db->query('SELECT * FROM plants ORDER BY plant_id DESC;');   
            $results = $this->db->resultSet();
            return $results;
        }

        public function sellerview(){ //sellerpage
    
            $this->db->query("SELECT * FROM seller ORDER BY seller_id ASC;");
            $results = $this->db->resultSet();
            return $results;
            
        }

        /* public function sellersPlantDetails(){
    
            $this->db->query("SELECT * FROM plants ;");
            $results = $this->db->resultSet();
            return $results;
            
        } */

         

         public function sellersPlants($id){
    
            $this->db->query("SELECT * FROM plants WHERE seller_id = :seller_id "); 
            $this->db->bind(':seller_id', $id);  
            $results = $this->db->resultSet();
            return $results;
        } 

        public function sellers($id){
    
            $this->db->query("SELECT * FROM seller WHERE seller_id = :seller_id "); 
            $this->db->bind(':seller_id', $id);  
            $row = $this->db->single();
            return $row;
        }



        
        
    }
    
?>