<?php
class Customer {

    private $db;

    public function __construct() {
            $this->db = new Database;
    }
    

    public function findAllAddress() {
        $this->db->query("SELECT * FROM customer_address WHERE user_id='{$_SESSION['cus_id']}'");

        $results = $this->db->resultSet();
        
        return $results;
    }

    public function addAddress($data) {
        $this->db->query('INSERT INTO customer_address (user_id, FullName, Line1, Line2, City, PostalCode, ContactNo) VALUES (:user_id, :FullName, :Line1, :Line2, :City, :PostalCode, :ContactNo)');
        
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('FullName', $data['FullName']);
        $this->db->bind('Line1', $data['Line1']);
        $this->db->bind('Line2', $data['Line2']);
        $this->db->bind('City', $data['City']);
        $this->db->bind('PostalCode', $data['PostalCode']);
        $this->db->bind('ContactNo', $data['ContactNo']);

        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
    }
    
    public function showcustomerDetails(){

        $this->db->query("SELECT * FROM customer WHERE cus_id='{$_SESSION['cus_id']}'");

        $results = $this->db->resultSet();
        
        return $results;

    } 

    public function  showorderDetails(){

        $this->db->query("SELECT * FROM orderitems inner join plants,orders  ORDER BY orders.order_id  ASC;");

        $results = $this->db->resultSet();
        
        return $results;

    } 
    public function  showplantDetails(){

        $this->db->query("SELECT * FROM orderitems inner join plants,orders  ORDER BY orders.order_id  ASC;");

        $results = $this->db->resultSet();
        
        return $results;

    } 
    
    public function sellerview(){ 
    
        $this->db->query("SELECT * FROM orderitems LEFT join orders on orders.order_id = orderitems.order_id left JOIN seller on seller.seller_id=orderitems.seller_id group by orderitems.seller_id,orderitems.order_id;");
        // $this->db->query("SELECT * FROM orderitems inner join seller on orderitems.seller_id = seller.seller_id  group by orderitems.order_id ORDER BY order_id ASC;");
        $results = $this->db->resultSet();
        return $results;
        
    }

    public function C_OrdersToReveiw($data){
        $this->db->query('INSERT INTO `ratings`(rating_id,LikeDislike) VALUES(:rating_id,:LikeDislike)');
        {
            
             //Bind values
             $this->db->bind('rating_id', $data['rating_id']);
             $this->db->bind('LikeDislike', $data['LikeDislike']);
             
             //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            } 
            
        }

    }
    
    

}



?>
