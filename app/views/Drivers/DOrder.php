<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Driver.css">

</head>

<body>
<?php include_once APPROOT . '/views/includes/header.php'; ?> 
<!-- <button class="block">Personal Orders</button>
 -->

  <div class="row">
 
    <div class="main">
    <h2>Orders</h2>
    <div class="topnav">
    <a href="<?php echo URLROOT ?>/Drivers/DOrder">New Deliveries</a>
    <a href="<?php echo URLROOT ?>/Drivers/Dtobedelivered">To be Delivered</a>
    <a href="<?php echo URLROOT ?>/Drivers/Dhistory">History</a>
    </div>
    <br>
    <?php foreach($data['delivery'] as $orderDetails): ?>
    <div class="notify" style="height:80px;">
    <table class="table1">
      <tr>
        <th style="text-align:left">Order Number</th>
        <th style="text-align:left">Order Date</th>
        <th style="text-align:left">Order Time</th>
        
      </tr>
      <tr>
        <td><?php echo $orderDetails->order_id; ?></td>
        <td><?php echo $orderDetails->createdOn; ?></td>
        <td><?php echo $orderDetails->createdWhen; ?></td>
      </tr>
    </table>   
    </div><br>
    <?php endforeach; ?>
    </div>
    <div class="vl"></div>

    <div class="side">
        <div class="box">
    <h3>Delivery To :</h3>
    <h4 class="order">Order No : <?php echo $orderDetails->order_id; ?></h4>
    </div>
    <div class="Mapbox">
      
        <div class="adrs">
            <div style="overflow: auto;"><img src="<?php echo URLROOT ?>/public/img/1a.png">&nbsp <?php echo $orderDetails->order_id; ?></div><br>
            <div><img src="<?php echo URLROOT ?>/public/img/1c.png">&nbsp <?php echo $orderDetails->order_id; ?></div><br>
            <div><img src="<?php echo URLROOT ?>/public/img/1b.png">&nbsp <?php echo $orderDetails->order_id; ?></div>
        </div>
    </div>
     <h4>Shop Name :<br>
    Address :<Address></Address><br>
    Pick up Date : 23 Aug 2021<span style="padding-left: 280px;">Edit</h4>
    <div class="fakeimg" style="height:80px;">
    <table class="table1">
      <tr>
        <th rowspan="2"><img src="<?php echo URLROOT ?>/public/img/plant.png" style="float:left"></th>
        <th rowspan="2" style="text-align: left;">Alovera</th>
        <th style="text-align:left">Quantity</th>
        <th style="text-align:center">1</th>
      </tr>
      <tr>
        
        <td>Size</td>
        <td style="text-align:center">Small</td>
      </tr>
    </table>  
  </div><br>

    <h3>Sub Total :<span style="padding-left: 350px;">Rs.1950</h3>
    <h3 style="color: #097F28;">Total :<span style="padding-left: 390px;">Rs.1950</h3>
    <div class="AR">
    <button class="accept">Accept Order</button>
    <button class="reject">Reject Order</button>
    </div>
    </div>
  </div>

  
</body>
<?php include_once APPROOT . '/views/includes/footer.php'; ?> 
</html>