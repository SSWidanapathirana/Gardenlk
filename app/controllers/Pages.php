
<?php
class Page{
        private $db;

    public function __construct() {
            $this->db = new Database;
    }
    



    public function contact($data) {
            
            $this->db->query('INSERT INTO `contactus` (name, email, message) VALUES(:name, :email, :message)');
            
            //Bind values
            
            $this->db->bind('name', $data['name']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('message', $data['message']);
            
            //Execute function

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            } 

    }






   /*  public function findAllPosts(){
        $this->db->query('SELECT * FROM forum ORDER BY created_at DESC ');

        $results = $this->db->resultSet();
        
        return $results;
    }
 */




    /* public function AddDiscussion($data){

        $this->db->query('INSERT INTO `forum` (user_id,topic,body) VALUES(:user_id,:title, :body)');
            
            //Bind values
            $this->db->bind('user_id', $data['user_id']);
            $this->db->bind('title', $data['title']);
            $this->db->bind('body', $data['body']);
            
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            } 
    } */

    public function NewArrivals(){

                $this->db->query('SELECT * FROM plants ORDER BY plant_id DESC LIMIT 8;');
        
                $results = $this->db->resultSet();
                
                return $results;
    }

    public function cartItems(){

        $this->db->query('SELECT * FROM plants ORDER BY plant_id DESC;');

        $results = $this->db->resultSet();
        
        return $results;
}


             

    public function feedback1($driver_review){

        $this->db->query('INSERT INTO `driver_rate`(rate_id,order_id,driver_id,starRate,feedback_msg) VALUES(:rate_id,:order_id, :driver_id, :starRate, :feedback_msg)');
        {
            
             //Bind values
             $this->db->bind('rate_id', $driver_review['rate_id']);
             $this->db->bind('order_id', $driver_review['order_id']);
             $this->db->bind('driver_id', $driver_review['driver_id']);
             $this->db->bind('starRate', $driver_review['starRate']);
             $this->db->bind('feedback_msg', $driver_review['feedback_msg']);
            
             //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            } 
            
        }

    }

    public function feedback2($seller_review){

        $this->db->query('INSERT INTO `shop_rate`(rate_id,order_id,seller_id,heartRate,feedback_msg) VALUES(:rate_id,:order_id, :seller_id, :heartRate, :feedback_msg)');
        {
            
             //Bind values
             $this->db->bind('rate_id', $seller_review['rate_id']);
             $this->db->bind('order_id', $seller_review['order_id']);
             $this->db->bind('seller_id', $seller_review['seller_id']);
             $this->db->bind('heartRate', $seller_review['heartRate']);
             $this->db->bind('feedback_msg', $seller_review['feedback_msg']);
             
             //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            } 
            
        }

    }
    
    public function checkout($data){

		$this->db->query('INSERT INTO orders (plant_id, user_id ,seller_id,plant_id, plant_name,seller_name, price, quantity, total, Line1,Line2,City, PostalCode,ContatNo,method, payment_conf, delivered) VALUES (:plant_id, :user_id ,:seller_id,:plant_id, :plant_name,:seller_name, :price, :quantity, :total, :Line1,:Line2,:City, :PostalCode,:ContatNo,:method, :payment_conf, :delivered)');
		{
		$this->db->bind('plant_id', $data['plant_id']);
        $this->db->bind('user_id', $data['user_id']);
		$this->db->bind('seller_id', $data['seller_id']);
        $this->db->bind('cus_name', $data['cus_name']);
		$this->db->bind('plant_name', $data['plant_name']);
		$this->db->bind('seller_name', $data['seller_name']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('quantity', $data['quantity']);
        $this->db->bind('total', $data['total']);
		$this->db->bind('Line1', $data['Line1']);
		$this->db->bind('Line2', $data['Line2']);
		$this->db->bind('City', $data['City']);
		$this->db->bind('PostalCode', $data['PostalCode']);
		$this->db->bind('ContactNo', $data['ContactNo']);
		$this->db->bind('method', $data['method']);
        $this->db->bind('payment_conf', $data['payment_conf']);
		$this->db->bind('delivered', $data['delivered']);
        
        if($this->db->execute()){
            return true;
        }else {
            return false;
        }
      }}
	
         



}





 
