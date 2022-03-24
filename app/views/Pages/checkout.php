
<head>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/checkout.css"> 
<?php include_once APPROOT . '/views/includes/header.php'; ?> 

</head>
<body>

<div class="container">

<form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
    <input type="hidden" name="merchant_id" value="1219599">  
    <input type="hidden" name="return_url" value="http://localhost/Gardenlk/public/return">
    <input type="hidden" name="cancel_url" value="http://localhost/Gardenlk/public/cancel">
    <input type="hidden" name="notify_url" value="http://localhost/Gardenlk/public/notify">  
    
        <div class="leftCol">
                <table> <!--shop card 1-->
                    <tr > <!--shop details-->

                    
                    <input type="hidden" name="order_id" class="text1" value="12345" >
                        <th><img src="<?php echo URLROOT ?>/public/img/LOGO.png" class="siteIcon"/></th>
                        <th>Shop Name</th>
                        <th> </th>
                        <th></th>
                        <th></th>
                     </tr>
                    <br>
                    <tr>  
                        <td colspan="2"><img src="<?php echo URLROOT ?>/public/img/p2.jpg" class="imgplant"/></td>
                        <td></td>
                        <td colspan="3" style="text-align:left;"><input type="text" name="items" class="text1" value="cactus plant"></td>
                        <td></td>
                        <input type="hidden" name="currency" class="text1" value="LKR">
                        <td><input type="text" name="amount" class="text1" value="1000"></td>
                    </tr>
                </table>
                <input type="submit" class="Cartbutton1" value="Proceed To Pay">
        </div>

        <div class="rightCol">
            <h2>Billing And Delivery</h2>
            <input type="hidden" class="field" name="first_name" value="Mahinda">
            <input type="hidden" class="field" name="last_name" value="Rajapaksha">
            <div class="text1"><input type="text" class="field" name="address" value="No.1, Medamulana Road"></div>
            <a href=""><div class="text2">Edit</div></a>
            <div class="text3"><input type="text" class="field" name="phone" value="0767323260"><br></div>
            <a href=""><div class="text4">Edit</div></a>
            <div class="text5"><input type="text" class="field" name="email" value="mr@gmail.com"></div>
            <a href=""><div class="text6">Edit</div></a>

        </div>
        
        <div class="rightCol">
            <h2>Order Summary</h2>
            <div class="text1">Sub Total</div>
            <a href=""><div class="text2">1100.00</div></a>
            <div class="text3">Delivery Charges</div>
            <a href=""><div class="text4">240.00</div></a>
            <div class="text5">Total</div>
            <a href=""><div class="text6">1340.00</div></a>
            <input type="hidden" class="field" name="city" value="Hambanthota">
            <input type="hidden" name="country" value="Sri Lanka">

             <div>
                
             </div>
        </div>

    </div>
  
     
</form> 
    </body>