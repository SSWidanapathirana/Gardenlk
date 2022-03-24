
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/C_AccountIndex.css">    
</head>   
   
<body>
    
<?php include_once APPROOT . '/views/includes/header.php'; ?>
   
    <div class="row2">
         
        <?php include_once APPROOT . '/views/includes/C_sidenav.php'; ?>
        <img src="<?php echo URLROOT ?>/public/img/bgup.png" class="backgroundupImage"/>
        <div>
            <div class="col2box1">
                MY Profile <a href="<?php echo URLROOT ?>/Customers/C_Profile" class="editlink">Edit</a>
                <hr style="width:45%;text-align:left;margin-left:0">
                <p><?php echo $customers->FullName?></p>
                <p><?php echo $customers->Email?></p>
            </div>
            <?php foreach($data['address'] as $address): ?>
            <div class="col2box2">
                Address Book <a href="<?php echo URLROOT ?>/Customers/C_AddAddress" class="editlink">Edit</a><br>
                <hr style="width:28%;text-align:left;margin-left:0">
                <p><?php echo $address->Line1; ?></p>
                <p><?php echo $address->Line2; ?></p>
                <p><?php echo $address->City; ?></p>
                
                <span class="addressspan1"><b><?php echo $customers->FullName?></b><br></span>
                <span class="addressspan2"><br><br><br><br> <button id="myBtn">Default Address</button></span>        
            </div>
        </div>
        <?php endforeach; ?>
        <div class="col2row1">
            My Orders<br>
            <a href="<?php echo URLROOT ?>/Customers/C_OrdersHistory"><div class="orderImage"><img src="<?php echo URLROOT ?>/public/img/orders3.png"><br>&nbsp Orders</div></a>
            <a href="<?php echo URLROOT ?>/Customers/C_OrdersToPay"><div class="orderImage"><img src="<?php echo URLROOT ?>/public/img/topay3.png"><br>&nbsp To Pay</div></a>
            <a href="<?php echo URLROOT ?>/Customers/C_OrdersToReceive"><div class="orderImage"><img src="<?php echo URLROOT ?>/public/img/toreceive3.png"><br>&nbsp To Receive</div></a>
            <a href="<?php echo URLROOT ?>/Customers/C_OrdersToReview"><div class="orderImage"><img src="<?php echo URLROOT ?>/public/img/toreview3.png"><br>&nbsp To Review</div></a>
        </div>

        <div class="col2">
 
            <h2>Recent Orders</h2>
            <div class="topnav">
                <a href="<?php echo URLROOT ?>/Customers/C_OrdersToPay">To Pay</a>
                <a href="<?php echo URLROOT ?>/Customers/C_OrdersToReceive">To Receive</a>    
            </div>
            <br>
                
            <div>
                <table class="orders-table">
                    <tr class="orders-table-head">
                        <td colspan="2">OrderNo - #344565</td>
                        <td></td>
                        <td></td>
                        <td colspan="2">Placed On 2021.10.25</td>
                    </tr>
                     
                    
                    <tr>
                        <td><img src="<?php echo URLROOT ?>/public/img/p5.jpg" class="imgplant"/></td>
                        <td style="text-align:left;">Here comes a description about the plant with color and size. Also you can mention the selling items like pots including or not</td>
                        <td style=" color:grey;">Qty: 1</td>
                        <td>Estimated arrival:2021.10.30</td>
                        <td>Rs.800.00</td> 
                    </tr>
                    <tr>
                        <td><img src="<?php echo URLROOT ?>/public/img/p7.jpg" class="imgplant"/></td>
                        <td style="text-align:left;">Here comes a description about the plant with color and size. Also you can mention the selling items like pots including or not</td>
                        <td style="color:grey;">Qty: 1</td>
                        <td>Estimated arrival:2021.10.30</td>
                        <td>Rs.800.00</td>  
                    </tr>
                     
                </table><br> 
                <table class="orders-table">
                    <tr class="orders-table-head">
                        <td colspan="2">OrderNo - #344565</td>
                        <td></td>
                        <td></td>
                        <td colspan="2">Placed On 2021.10.25</td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo URLROOT ?>/public/img/p13.jpg" class="imgplant"/></td>
                        <td style="text-align:left;">Here comes a description about the plant with color and size. Also you can mention the selling items like pots including or not</td>
                        <td style=" color:grey;">Qty: 1</td>
                        <td>Estimated arrival:2021.10.30</td>
                        <td>Rs.800.00</td> 
                    </tr>
                     
                </table> 
            </div><br>
        </div><br>
    </div>

    <?php include_once APPROOT . '/views/includes/footer.php'; ?>



    <!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="defaultAddressrow"> 
            <div class="defaultAddresscol2"><br> 
                <div>Select Default Address</div> <br>

                <?php foreach($data['address'] as $address): ?>

                    <div class="defaultAddressaddressCard"> <!--Address Card 1--> 
                        <p class="defaultSelection">
                        
                        <input type="radio" id="default" name="default" value="default"></p>   
                        <table class="defaultAddresstable1">
                        <tr>
                            <th style="text-align:left"><?php echo $address->FullName; ?></th>
                            <!-- Make check box default selection --> 
                        </tr>
                        <tr>
                            <td><?php echo $address->Line1; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $address->Line2; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $address->City; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $address->PostalCode; ?></td>
                            <td style="text-align:right"><?php echo $address->ContactNo; ?></td>
                        </tr>
                        </table>   
                    </div><br>

                <?php endforeach; ?> 
            </div>
        </div><br> 
    </div>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
