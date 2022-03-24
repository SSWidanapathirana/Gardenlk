<?php 

class Admins extends Controller{
    public function __construct() { 
        $this->adminModel = $this->model('Admin');
    }
    

    
    public function A_dashboard() {
        $contact = $this->adminModel -> contactIssues();

        $data = [
            'contact' =>$contact
        ];
        $this-> view('admins/A_dashboard', $data);

    }



    public function A_dp_request() {

        $drivers = $this->adminModel->findAllDrivers();
        $data = [
            'drivers' => $drivers
        ]; 
        
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'driver_id' => trim($_POST['driver_id']),

            ];
                if($this->adminModel->Acceptdriver($data))
                {
                    header("Location: " . URLROOT . "/Admins/A_dp_request");
                }else{
                    die("Something went wrong, Please try again!");
                }
        

       $this-> view('Admins/A_dp_request', $data);

        }
        $this-> view('Admins/A_dp_request', $data);
    
    }


    

    public function A_users_customer() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_customer', $data);

    }

    public function A_settings() {
        $admin = $this->adminModel->adminDetails();

        $data = [
            'admin' => $admin
        ];



        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST);

            $data = [
/*                 'name' => trim($_POST['name']), */
                'email' => trim($_POST['email'])

            ];

            if($this->admin->updateProfile($data))
                {
                    echo "<script>alert('Admin details Updated Successfully')</script>";
                    echo "<script>window.location = 'A_settings'</script>";
                    
                }else{
                    die("Something went wrong, Please try again!");
                }
        $this-> view('admins/A_settings', $data);

            }
        $this-> view('admins/A_settings', $data);

    }

    public function A_users_adduser_admin() {
        $data = [
            'email' => '',
            'password' => '',
            'repassword' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST);

              $data = [
                
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'repassword' => trim($_POST['repassword']),
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]|[^\d])$/i";


            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else{
                //Check if email exists.
                if ($this->adminModel->findAdminByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }
            

           // Validate password on length, numeric values,
            if(empty($data['password'])){
              $data['passwordError'] = 'Please enter password.';
            } else if(strlen($data['password']) < 6){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } /* else if (!preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must be have at least one numeric value.';
            } */

            //Validate confirm password
             if (empty($data['repassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['repassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            
                //Register user from model function
                if ($this->adminModel->A_users_adduser_admin($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/admins/A_dashboard');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this-> view('admins/A_users_adduser_admin', $data);

    }

    public function A_users_adduser_customer() {
        $data = [
            'Fullname' => '',
            'Email' => '',
            'Password' => '',
            'repassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST);

              $data = [
                'Fullname' => trim($_POST['Fullname']),
                'Email' => trim($_POST['Email']),
                'Password' => trim($_POST['Password']),
                'repassword' => trim($_POST['repassword']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]|[^\d])$/i";

            //Validate username on letters/numbers
            if (empty($data['Fullname'])) {
                $data['usernameError'] = 'Please enter Fullname.';
            } /* else if (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            } */

            //Validate email
            if (empty($data['Email'])) {
                $data['emailError'] = 'Please enter email address.';
            } else if (!filter_var($data['Email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else{
                //Check if email exists.
                if ($this->adminModel->findCustomerByEmail($data['Email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }
            

           // Validate password on length, numeric values,
            if(empty($data['Password'])){
              $data['passwordError'] = 'Please enter password.';
            } else if(strlen($data['Password']) < 6){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } /* else if (!preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must be have at least one numeric value.';
            } */

            //Validate confirm password
             if (empty($data['repassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['Password'] != $data['repassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['Password'] = password_hash($data['Password'], PASSWORD_DEFAULT);
            
                //Register user from model function
                if ($this->adminModel->A_users_adduser_customer($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/admins/A_dashboard');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this-> view('admins/A_users_adduser_customer', $data);

    }



    public function A_users_adduser_delivery(){

            $data = [
               'name' =>'',
               'number' =>'',
               'address' =>'',
               'nic' =>'',
               'gender' =>'',
               'email' =>'',
               'vehicle' =>'',
               'vnumber' =>'',
               'password' =>'',
               'confirmPassword' =>'',
               'emailError' =>'',
               'passwordError' => '',
               'confirmPasswordError' => '',
           ];

           if($_SERVER['REQUEST_METHOD'] == 'POST'){
        

            $_POST = filter_input_array(INPUT_POST);
    
                  $data = [
                    'name' => trim($_POST['fname']),
                    'number' =>trim($_POST['cnumber']),
                    'address' =>trim($_POST['address']),
                    'nic' =>trim($_POST['nnumber']),
                    'gender' =>($_POST['gender']),
                    'email' => trim($_POST['email']),
                    'vehicle' =>($_POST['vtype']),
                    'vnumber' =>trim($_POST['vnumber']),
                    'password' => trim($_POST['password']),
                    'confirmPassword' => trim($_POST['repassword']),
                    'emailError' => '',
                    'passwordError' => '',
                    'confirmPasswordError' => '',
                ];
    
                $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
    
                //Validate email
                if (empty($data['email'])) {
                    $data['emailError'] = 'Please enter email address.';
                } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['emailError'] = 'Please enter the correct format.';
                } else {
                    //Check if email exists.
                    if ($this->adminModel->findDriverByEmail($data['email'])) {
                    $data['emailError'] = 'Email is already taken.';
                    }
                }
    
               // Validate password on length, numeric values,
                if(empty($data['password'])){
                  $data['passwordError'] = 'Please enter password.';
                } else if(strlen($data['password']) < 6){
                  $data['passwordError'] = 'Password must be at least 8 characters';
                } else if (preg_match($passwordValidation, $data['password'])) {
                  $data['passwordError'] = 'Password must be have at least one numeric value.';
                }
    
                //Validate confirm password
                 if (empty($data['confirmPassword'])) {
                    $data['confirmPasswordError'] = 'Please enter password.';
                } else {
                    if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                    }
                }
    
                // Make sure that errors are empty
                if (empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {
    
                    // Hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    
                    //Register user from model function
                    if ($this->adminModel->A_users_adduser_delivery($data)) {
                        //Redirect to the login page
                        header('location: ' . URLROOT . '/admins/A_dashboard');
                    } else {
                        die('Something went wrong.');
                    }
                }
            }
    
           $this-> view('admins/A_users_adduser_delivery', $data);



        /* $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_adduser_delivery', $data); */

    }








    public function A_users_adduser_moderator() {
        $data = [
            'email' => '',
            'password' => '',
            'repassword' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST);

              $data = [
                
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'repassword' => trim($_POST['repassword']),
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]|[^\d])$/i";


            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else{
                //Check if email exists.
                if ($this->adminModel->findModeratorByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }
            

           // Validate password on length, numeric values,
            if(empty($data['password'])){
              $data['passwordError'] = 'Please enter password.';
            } else if(strlen($data['password']) < 6){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } /* else if (!preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must be have at least one numeric value.';
            } */

            //Validate confirm password
             if (empty($data['repassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['repassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            
                //Register user from model function
                if ($this->adminModel->A_users_adduser_moderator($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/admins/A_dashboard');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this-> view('admins/A_users_adduser_moderator', $data);

    }

    public function A_users_adduser_seller() {
        $data = [
            'businessName' => '',
            'brNo' => '',
            'businessAddress' => '',
            'city' => '',
            'ownerName' => '',
            'contactNo' => '',
            'email' => '',
            'shopImg' => '',
            'password' => '',
            'confirmPassword' => '',
            'brNoError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST);

              $data = [
                'businessName' => trim($_POST['businessName']),
                'brNo' => trim($_POST['brNo']),
                'businessAddress' => trim($_POST['businessAddress']),
                'city' => trim($_POST['city']),
                'ownerName' => trim($_POST['ownerName']),
                'contactNo' => trim($_POST['contactNo']),
                'email' => trim($_POST['email']),
                'shopImg' => trim($_POST['shopImg']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'brNoError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[A-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate br number on letters/numbers
            if (empty($data['brNo'])) {
                $data['brNoError'] = 'Please enter BR Number.';
            } elseif (!preg_match($nameValidation, $data['brNo'])) {
                $data['brNoError'] = 'Name can only contain capital letters and numbers.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->adminModel->findSellerByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }

           // Validate password on length, numeric values,
            if(empty($data['password'])){
              $data['passwordError'] = 'Please enter password.';
            } elseif(strlen($data['password']) < 6){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = '';//minimum a number should include
            }

            //Validate confirm password
             if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['brNoError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->adminModel->A_users_adduser_seller($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/admins/A_dashboard');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this-> view('admins/A_users_adduser_seller', $data);

    }

    public function A_users_adduser() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_adduser', $data);

    }

    public function A_users_admin() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_admin', $data);

    }

    public function A_users_delivery() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_delivery', $data);

    }

    public function A_users_moderator() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_moderator', $data);

    }

    public function A_users_seller() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_seller', $data);

    }

    public function A_users_updateuser_admin() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_updateuser_admin', $data);

    }

    public function A_users_updateuser_customer() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_updateuser_customer', $data);

    }

    public function A_users_updateuser_delivery() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_updateuser_delivery', $data);

    }

    public function A_users_updateuser_moderator() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_updateuser_moderator', $data);

    }

    public function A_users_updateuser_seller() {
        $data = [
            'title' =>'Login Page'
        ];
        $this-> view('admins/A_users_updateuser_seller', $data);

    }

    
}