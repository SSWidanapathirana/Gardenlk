<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->pageModel = $this->model('Page');
    }





    public function index()
    {

        $plants = $this->pageModel->NewArrivals();
        $data = [
            'plants' => $plants
        ];


        if (isset($_POST['add'])) {

            if (isset($_SESSION['cart'])) {
                $item_array_id = array_column($_SESSION['cart'], "product_id");

                if (in_array($_POST['product_id'], $item_array_id)) {
                    echo "<script>alert('Product is already added in the cart..!')</script>";
                    echo "<script>window.location = '<?php echo URLROOT; ?>/pages/index'</script>";
                } else {

                    $count = count($_SESSION['cart']);
                    $item_array = array(
                        'product_id' => $_POST['product_id']
                    );
                    $_SESSION['cart'][$count] = $item_array;
                }
            } else {

                $item_array = array(
                    'product_id' => $_POST['product_id']
                );

                // Create new session variable
                $_SESSION['cart'][0] = $item_array;
            }
        }

        $this->view('pages/index', $data);
    }






    public function about()
    {
        $this->view('pages/about');
    }



    public function cart()
    {

        $plants = $this->pageModel->cartItems();
        $data = [
            'plants' => $plants
        ];

        if (isset($_POST['remove'])) {

            if ($_GET['action'] == 'remove') {
                foreach ($_SESSION['cart'] as $key => $value) {
                    if ($value["product_id"] == $_GET['id']) {
                        unset($_SESSION['cart'][$key]);
                        echo "<script>alert('Product has been Removed...!')</script>";
                        echo "<script>window.location = 'cart.php'</script>";
                    }
                }
            }
        }
        $this->view('pages/cart', $data);
    }






    public function checkout()
    {

        /* $plants = $this->pageModel->cartItems();
        $data = [
            'plants' => $plants
        ]; 
         
        if (isset($_POST['remove'])){
            
            if ($_GET['action'] == 'remove'){
                foreach ($_SESSION['cart'] as $key => $value){
                    if($value["product_id"] == $_GET['id']){
                        unset($_SESSION['cart'][$key]);
                        echo "<script>alert('Product has been Removed...!')</script>";
                        echo "<script>window.location = 'cart.php'</script>";
                    }
                }
            }
          } */



        if (!isLoggedIn()) {
            header("Location: " . URLROOT . "/users/login");
        }
        $data = [
            'plant_id' => '',
            'user_id' => '',
            'seller_id' => '',
            'customer_name' => '',
            'plant_name' => '',
            'seller_name' => '',
            'price' => '',
            'quantity' => '',
            'total' => '',
            'Line1' => '',
            'Line2' => '',
            'City' => '',
            'PostalCode' => '',
            'ContactNo' => '',
            'method' => '',
            'payment_conf' => 'payment_conf',
            'delivered' => 'delivered'
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'plant_id' => $_POST['plant_id'],
                'user_id' => $_SESSION['cus_id'],
                'seller_id' => $_POST['seller_id'],
                'customer_name' => trim($_POST['customer_name']),
                'plant_name' => $_POST['plant_name'],
                'seller_name' => $_POST['seller_name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
                'total' => $_POST['total'],
                'Line1' => trim($_POST['Line1']),
                'Line2' => trim($_POST['Line2']),
                'City' => trim($_POST['City']),
                'PostalCode' => trim($_POST['PostalCode']),
                'ContactNo' => trim($_POST['ContactNo']),
                'method' => $_POST['method'],
                'payment_conf' => $_POST['payment_conf'],
                'delivered' => $_POST['delivered']
            ];
        } else {
            $this->view('Pages/checkout', $data);
        }
        $this->view('Pages/checkout', $data);
    }






    public function terms()
    {
        $this->view('Pages/terms');
    }






    public function confirmpayment()
    {
        $this->view('Pages/confirmpayment');
    }








    public function contact()
    {

        $data = [
            'name' => '',
            'email' => '',
            'message' => ''

        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'message' => trim($_POST['msg'])

            ];

            if ($this->pageModel->contact($data)) {
                header("Location: " . URLROOT . "/pages/index");
            } else {
                die("Something went wrong, Please try again!");
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'message' => ''

            ];
        }
        $this->view('pages/contact', $data);
    }











    public function feedback()
    {

        if (!isLoggedIn()) {
            header("Location: " . URLROOT . "/pages");
        }

        $driver_review = [

            'rate_id' => '',
            'order_id' => '',
            'driver_id' => '',
            'starRate' => '',
            'feedback_msg' => '',
          
        ];

        $seller_review = [

            'rate_id' => '',
            'order_id' => '',
            'seller_id' => '',
            'heartRate' => '',
            'feedback_msg' => '',


        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST);

            // driver rating
            $driver_review = [
                'rate_id' => trim($_POST['rate_id']),
                'order_id' => trim($_POST['order_id']),
                'driver_id' => trim($_POST['driver_id']),
                'starRate' => trim($_POST['starRate']),
                'feedback_msg' => trim($_POST['feedback_msg']),

            ];
            // seller rating
            $seller_review = [
                'rate_id' => trim($_POST['rate_id']),
                'order_id' => trim($_POST['order_id']),
                'seller_id' => trim($_POST['seller_id']),
                'heartRate' => trim($_POST['heartRate']),
                'feedback_msg' => trim($_POST['feedback_msg'])
            ];

            // $this->pageModel->feedback1($driver_review)
            // $this->pageModel->feedback1($seller_review)

            if ($this->pageModel->feedback1($driver_review)) {
                if ($this->pageModel->feedback2($seller_review)) {
                   
                    header("Location: " . URLROOT . "/Customers/C_ReviewPlants?seller_id=" . trim($_POST['seller_id']) . "&order_id=" . trim($_POST['order_id']) . "");
                }else{
                die("Something went wrong, Please try again!");
                }
            } else {
                die("Something went wrong, Please try again!");
            }
        } else {

            $driver_review = [

                'rate_id' => '',
                'order_id' => '',
                'driver_id' => '',
                'starRate' => '',
                'feedback_msg' => '',
              
            ];
    
            $seller_review = [
    
                'rate_id' => '',
                'order_id' => '',
                'seller_id' => '',
                'heartRate' => '',
                'feedback_msg' => '',
    
    
            ];
        }
        $this->view('pages/feedback', $driver_review,$seller_review);
    }
}
