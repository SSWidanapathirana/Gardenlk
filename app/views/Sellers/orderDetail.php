 <?php require APPROOT . '/views/includes/header.php';?>
 <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/S_orderDetail.css">


<body>

<div class="cont">
        <h1>Order Details</h1>
        <br>
        <div class="column">
            <div class="leftcol">
                 
                <table>
                    <tr>
                    <td>Order no :</td>
                    <td>Order Date :</td>
                    </tr>

                    <tr>
                    <td>Customer Name :</td>
                    <td>Status :</td>
                    </tr>

                    <tr>
                    <td>Bill Amount :</td>
                    <td>Total Items :</td>
                    </tr>

                    <tr>
                    <td>Delivery Date :</td>
                    <td></td>
                    </tr>

                </table>
                <div>
                    <button class="button1">Back</button>
                    <button class="button2">Assign Driver</button>
                </div>
            </div>
            <div class="rightcol">
                <img src="<?php echo URLROOT ?>/public/img/orderimg.jpg" class="img">
            </div>
        </div>
    </div>



</body>
<?php require APPROOT . '/views/includes/footer.php';?>