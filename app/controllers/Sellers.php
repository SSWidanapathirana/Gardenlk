<?php
class Sellers extends Controller {
    public function __construct() {
        $this->sellerModel = $this->model('Seller');
    }
    
    public function plant($id){
        $plantDetails = $this->sellerModel -> showPlantDetails($id);

        $data = [
            'plant' =>$plantDetails
        ];
        
        $this->view('Sellers/plant',$data);
    }
   
    public function dashboard(){
        $details = $this->sellerModel ->viewDash();

        $data = [
            'seller' =>$details
        ];
        
        $this->view('Sellers/Dashboard',$data);
    }

    public function dashboard_completed(){
        $this->view('Sellers/dashboard_completed');
    }

    public function dashboard_cancelled(){
        $this->view('Sellers/dashboard_cancelled');
    }

    public function dashboard_pending(){
        $this->view('Sellers/dashboard_pending');
    }

    public function dashboard_plants(){
        $this->view('Sellers/dashboard_plants');
    }
    
    public function orderHistory(){
        $this->view('Sellers/orderHistory');
    }
    public function plantpage(){
        $plants = $this->sellerModel->AllPlants();
        $data = [
            'plants' => $plants]; 
        
        $this->view('Sellers/plantpage',$data);
    }
    public function report(){
        $this->view('Sellers/report');
    }






    public function sellerpage(){
        $sellerDetails = $this->sellerModel->sellerview();
         
        $data = [
            'seller' => $sellerDetails,
        ]; 
        
        $this->view('Sellers/sellerpage',$data);
    }


    public function sellershoppage($id){
        $seller = $this->sellerModel->sellers($id);
        $plants = $this->sellerModel->sellersPlants($id);
        $data = [
            'seller' => $seller,
           'plants' => $plants
        ];
        $this->view('Sellers/sellershoppage',$data);
    }
    




    
    public function store(){
        $plant = $this->sellerModel -> showAllPlants();

        $data = [
            'plant' =>$plant
        ];
        
        $this->view('Sellers/store',$data);
    }
    public function orderDetail(){
        $this->view('Sellers/orderDetail');
    }

    
    public function SellerProfile(){
        $details = $this->sellerModel -> viewDetail();
        
        $data = [
            'sellerDetails' =>$details,
            'businessName' => '',
            'contactNo'=>'',
            'businessAddress'=>'',
            'ownerName'=>''
            
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
            'seller_id' =>$_SESSION['seller_id'],
            'businessName' => '',
            'contactNo'=>'',
            'businessAddress'=>'',
            'ownerName'=>''
        ];
        }else{

            $data = [
                'sellerDetails' =>$details,
                'businessName' => '',
                'contactNo'=>'',
                'businessAddress'=>'',
                'ownerName'=>''
                
            ];
            
        }
        
        $this->view('Sellers/sellerProfile',$data);
    }

    public function SellerChangePwd(){
             
        $this->view('Sellers/SellerChangePwd');
    }

    public function notification(){
        $this->view('Sellers/notification');
    }


    public function addPlant() {
        $data = [
            'seller_id' => '',
            'pname' => '',
            'img1'=>'',
            'img2'=>'',
            'img3'=>'',
            'img4'=>'',
            'price' => '',
            'quantity' => '',
            'category' => '',
            'orderlevel' => '',
            'description' => '',
            'NameError' => '',
            //'img1Error'=>'',
            'priceError' => '',
            'quantityError' =>'',
            'categoryError'=>''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
            'seller_id' =>$_SESSION['seller_id'],
            'pname' => trim($_POST['pname']),
            'img1'=>$_POST['img1'],
            'img2'=>$_POST['img2'],
            'img3'=>$_POST['img3'],
            'img4'=>$_POST['img4'],
            'price' => trim($_POST['price']),
            'quantity' => trim($_POST['quantity']),
            'category' => trim($_POST['category']),
            'orderlevel' => trim($_POST['orderlevel']),
            'description' => trim($_POST['description']),
            'NameError' => '',
            'priceError' => '',
           // 'img1Error'=>'',
            'quantityError'=>'',
            'categoryError'=>''
            ];
            if(empty($data['pname'])) {
                $data['NameError'] = 'Name cannot be empty';
            }

            if(empty($data['price'])) {
                $data['priceError'] = 'Please fill the Price';
            }

            if(empty($data['quantity'])) {
                $data['quantityError'] = 'Please fill the Quantity';
            }

            if(empty($data['category'])) {
                $data['categoryError'] = 'Please select a category';
            }
           /* if(empty($data['img1'])) {
                $data['img1Error'] = 'Please select atleast one image';
            }*/
            if(empty($data['NameError']) && empty($data['priceError']) && empty($data['quantityError']) && empty($data['categoryError'])/* && (empty($data['img1']))*/)

               if($this->sellerModel->addPlant($data))
                {   header('location: ' . URLROOT . '/sellers/store'); //redirect to
                      
                }else{
                    
                    echo "<script>alert('Something went wrong, Please try again!'); </script>";
                }
            
        }else{
            $this-> view('Sellers/addPlant',$data);
        }

        $this->view('Sellers/addPlant');
    }
    


    public function category_flowerPlant(){
        $plants = $this->sellerModel->flowerPlants();
        $data = [
            'plants' => $plants]; 
        
        $this->view('Sellers/category_flowerPlant',$data);
    }

    public function category_housePlant(){
        $plants = $this->sellerModel->housePlants();
        $data = [
            'plants' => $plants]; 
        
        $this->view('Sellers/category_housePlant',$data);
    }

    public function category_outdoorPlant(){
        $plants = $this->sellerModel->outdoorPlants();
        $data = [
            'plants' => $plants]; 
        
        $this->view('Sellers/category_outdoorPlant',$data);
    }

    public function category_pottedPlant(){
        $plants = $this->sellerModel->pottedPlants();
        $data = [
            'plants' => $plants]; 
        
        $this->view('Sellers/category_pottedPlant',$data);
    }

    public function category_tablePlant(){
        $plants = $this->sellerModel->tablePlants();
        $data = [
            'plants' => $plants]; 
        
        $this->view('Sellers/category_tablePlant',$data);
    }



}