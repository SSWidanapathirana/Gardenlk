<?php

class Drivers extends Controller{
    public function __construct() { 
        $this->driverModel = $this->model('Driver');
    }

    public function Dprofile() {

        $driver = $this->driverModel -> driverInfo();

        $data = [
            'driver' =>$driver,
        ];
       
    $this-> view('drivers/Dprofile', $data);

    }

    public function DChangePwd() {
        $driver = $this->driverModel -> driverInfo();

        $data = [
            'driver' =>$driver,
            'current_password' =>'',
            'new_password' =>'',
            'confirm_password' =>'',
            'currentPasswordError' =>'',
            'passwordError' =>'',
            'confirmPasswordError' =>''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'driver' =>$driver,
                'current_password' => $_POST['current_password'],
                'new_password' => $_POST['new_password'],
                'confirm_password' => $_POST['confirm_password'],
                'currentPasswordError' =>'',
                'passwordError' =>'',
                'confirmPasswordError' =>''
            ];


            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            // Validate password on length, numeric values,
            if(empty($data['new_password'])){
            $data['passwordError'] = 'Please enter password.';
          } else if(strlen($data['new_password']) < 6){
            $data['passwordError'] = 'Password must be at least 8 characters';
          } else if (preg_match($passwordValidation, $data['new_password'])) {
            $data['passwordError'] = 'Password must be have at least one numeric value.';
          }

            //Validate confirm password
            if (empty($data['confirm_password'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['new_password'] != $data['confirm_password']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            if(empty($data['confirmPasswordError'])){

                $driver = $this->driverModel->findDriverPassword();

                $Passworddata = [
                    'driver' => $driver
                ];
                
               
                if (password_verify($data['current_password'], $Passworddata['driver'][0]->password )){
                     // Hash password
                $data['new_password'] = password_hash($data['new_password'], PASSWORD_DEFAULT);

                    if ($this->driverModel->D_changePassword($data)) {
                        //Redirect to the login page
                        header('location: ' . URLROOT . '/drivers/Dprofile');
                    } else {
                        die('Something went wrong.');
                    }  
                }else{
                    $data['currentPasswordError'] = 'Passwords do not match, please try again.';
                }
            $this-> view('drivers/DChangePwd', $data);
            }
    }
    
        $this-> view('drivers/DChangePwd', $data);

    }


    public function DOrder() {
        $orderDetails = $this->driverModel -> showorderDetails();
        $data = [
            'delivery' => $orderDetails,
        ];
        $this-> view('drivers/DOrder', $data);

    }

    public function Dhistory() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('drivers/Dhistory', $data);

    }

    public function Dtobedelivered() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('drivers/Dtobedelivered', $data);

    }
}