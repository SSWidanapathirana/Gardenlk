<?php
    class Admin {
        private $db;

    public function __construct() {
            $this->db = new Database;
        }
        
    public function findAllDrivers(){
        
            $this->db->query('SELECT * FROM driver WHERE status = "Pending" ORDER BY date DESC ');
    
            $results = $this->db->resultSet();
            
            return $results;
        }

        public function Acceptdriver($data){

            $this->db->query('UPDATE driver SET status = "accept" WHERE driver_id = :driver_id');

            $this->db->bind('driver_id', $data['driver_id']);
             

            if($this->db->execute()){
                return true;
            }else {
                return false;
            }

        }


         //Find user by email.
    public function findDriverByEmail($email){
        //Prepared statement
        $this->db->query('SELECT * FROM driver WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function A_users_adduser_customer($data){

        $this->db->query('INSERT INTO customer (FullName, Email, Password) VALUES(:Fullname, :Email,:Password)');

        //Bind values
        $this->db->bind(':Fullname', $data['Fullname']);
        $this->db->bind(':Email', $data['Email']);
        $this->db->bind(':Password', $data['Password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    //Find user by email. Email is passed in by the controller 
    public function findCustomerByEmail($Email) {
        //Prepared statement
        $this->db->query('SELECT * FROM customer WHERE Email = :Email');

        //Email param will be binded with the email variable
        $this->db->bind(':Email', $Email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function A_users_adduser_seller($data){

        $this->db->query('INSERT INTO seller ( businessName,brNo,businessAddress,city,ownerName,contactNo,email,shopimg, password) VALUES( :businessName,:brNo,:businessAddress,:city,:ownerName,:contactNo,:email,:shopImg, :password)');
    
        //Bind values
       // $this->db->bind(':username', $data['username']);
        $this->db->bind(':businessName', $data['businessName']);
        $this->db->bind(':brNo', $data['brNo']);
        $this->db->bind(':businessAddress', $data['businessAddress']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':ownerName', $data['ownerName']);
        $this->db->bind(':contactNo', $data['contactNo']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':shopImg', $data['shopImg']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findSellerByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM seller WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }




    public function A_users_adduser_delivery($data){

        $this->db->query('INSERT INTO driver (fullname, phoneNo, address, nic, gender, email, vehicel, vehicel_number, password) VALUES(:name, :number, :address, :nic, :gender, :email, :vehicle, :vnumber, :password)');

        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':number', $data['number']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':vehicle', $data['vehicle']);
        $this->db->bind(':vnumber', $data['vnumber']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function A_users_adduser_moderator($data){

        $this->db->query('INSERT INTO moderator (email,password) VALUES(:email,:password)');

        //Bind values
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    //Find user by email. Email is passed in by the controller 
    public function findModeratorByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM moderator WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }



    public function A_users_adduser_admin($data){

        $this->db->query('INSERT INTO admin (email,password) VALUES(:email,:password)');

        //Bind values
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    //Find user by email. Email is passed in by the controller 
    public function findAdminByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM admin WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function contactIssues()
    {
        $this->db->query('SELECT * FROM contactus');

        $results = $this->db->resultSet();
        
        return $results;
    }

    public function adminDetails()
        {
            $this->db->query("SELECT * FROM admin WHERE id='{$_SESSION['admin_id']}'");

            $results = $this->db->resultSet();
            
            return $results;
        }

    public function updateProfile($data){

        $this->db->query("UPDATE admin SET /* name = :name */, email = :email WHERE id='{$_SESSION['admin_id']}'");

        /* $this->db->bind('name', $data['name']); */
        $this->db->bind('email', $data['email']);
         

        if($this->db->execute()){
            return true;
        }else {
            return false;
        }

    }




       
}
