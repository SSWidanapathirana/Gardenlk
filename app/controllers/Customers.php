<?php

class Customers extends Controller{

    public function __construct() { 
        $this->customerModel = $this->model('Customer'); 
    }

    public function C_AddAddress() {
        $customerDetails = $this->customerModel -> showcustomerDetails();
        $address = $this->customerModel -> findAllAddress();
        $data = [
            'customer' => $customerDetails,
            'address' =>$address
        ];
         
        $this-> view('customers/C_AddAddress', $data);
    }

    public function C_AddressBook() {

    $customerDetails = $this->customerModel -> showcustomerDetails();
        

        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/users/login");
        }

        $data = [
            'customer' => $customerDetails,
            'FullName' => '',
            'Line1' => '',
            'Line2' => '',
            'City' => '',
            'PostalCode' => '',
            'ContactNo' => '',
            'NameError' => '',
            'line1Error' => '',
            'line2Error' => '',
            'CityError' => '',
            'PostalCodeError' => '',
            'ContactNoError' => ''

        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'customer' => '',
                'user_id' =>$_SESSION['cus_id'],
                'FullName' => trim($_POST['fname']),
                'Line1' => trim($_POST['line1']),
                'Line2' => trim($_POST['line2']),
                'City' => trim($_POST['City']),
                'PostalCode' => trim($_POST['PostalCode']),
                'ContactNo' => trim($_POST['ContactNo']),
                'NameError' => '',
                'line1Error' => '',
                'line2Error' => '',
                'CityError' => '',
                'PostalCodeError' => '',
                'ContactNoError' => ''

            ];

            if(empty($data['FullName'])) {
                $data['NameError'] = 'Name cannot be empty';
            }

            if(empty($data['Line1'])) {
                $data['line1Error'] = 'Please fill the Address';
            }

            if(empty($data['Line2'])) {
                $data['line2Error'] = 'Please fill the Address';
            }

            if(empty($data['City'])) {
                $data['CityError'] = 'Please enter city';
            }

            if(empty($data['ContactNo'])) {
                $data['ContactNoError'] = 'Please fill the Contact Number';
            }

            if(empty($data['NameError']) && empty($data['line1Error']) && empty($data['line2Error']) && empty($data['CityError']) && empty($data['ContactNoError']) )

                if($this->customerModel->addAddress($data))
                {
                    header("Location: " . URLROOT . "/customers/C_AddAddress");
                }else{
                    die("Something went wrong, Please try again!");
                }

        }else{
            $this-> view('Customers/C_AddressBook',$data);
        }
        $this-> view('customers/C_AddressBook',$data);

        
    }








    
    public function C_ChangePassword() {
        $customerDetails = $this->customerModel -> showcustomerDetails();

        $data1 = [
            'customer' => $customerDetails
        ];
        $this-> view('customers/C_ChangePassword', $data1);
    }

    public function C_Notification() {
        $customerDetails = $this->customerModel -> showcustomerDetails();
        $data = [
            'customer' => $customerDetails
        ];
        $this-> view('customers/C_Notification', $data);
    }

    public function C_ForgotPassword() {
        $this-> view('customers/C_ForgotPassword');
    }

    public function C_OrdersHistory() {
        $customerDetails = $this->customerModel -> showcustomerDetails();
        $data = [
            'customer' => $customerDetails
        ];
        $this-> view('customers/C_OrdersHistory', $data);
    }

    public function C_OrdersToPay() {
        $customerDetails = $this->customerModel -> showcustomerDetails();
        $data = [
            'customer' => $customerDetails
        ];
        $this-> view('customers/C_OrdersToPay',$data);
    }

    public function C_OrdersToReceive() {
        $customerDetails = $this->customerModel -> showcustomerDetails();
        $data = [
            'customer' => $customerDetails
        ];
        $this-> view('customers/C_OrdersToReceive',$data);
    }

    public function C_ReviewPlants() {
        $customerDetails = $this->customerModel -> showcustomerDetails();
        $plantDetails = $this->customerModel -> showplantDetails();
        $orderDetails = $this->customerModel -> showorderDetails();
        $sellerDetails = $this->customerModel->sellerview();
        $data = [
            'delivery' => $orderDetails,
            'plants' => $plantDetails,
            'customer' => $customerDetails,
            'seller' => $sellerDetails,
        ];
        $this-> view('customers/C_ReviewPlants',$data);
    }


    public function C_OrdersToReview() {
        $customerDetails = $this->customerModel -> showcustomerDetails();
        $orderDetails = $this->customerModel -> showorderDetails();
        $sellerDetails = $this->customerModel->sellerview();

        $data = [
            'customer' => $customerDetails,
            'delivery' => $orderDetails,
            'seller' => $sellerDetails,
        ];
        
        

        $this-> view('customers/C_OrdersToReview',$data);
    }

    public function C_Profile() {

        $customerDetails = $this->customerModel -> showcustomerDetails();

        $data = [
            'customer' => $customerDetails
        ];

        $this-> view('customers/C_Profile', $data);
    }

    public function C_AccountIndex() {

        $customerDetails = $this->customerModel -> showcustomerDetails();
        $address = $this->customerModel -> findAllAddress();

        $data = [
            'customer' => $customerDetails,
            'address' =>$address
        ];

         

        $this-> view('customers/C_AccountIndex',$data);
    }

    public function C_DefaultAddress() {
        $this-> view('customers/C_DefaultAddress');
    }



}