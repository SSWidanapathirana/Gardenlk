<?php require APPROOT . '/views/includes/header.php';?>
<link rel="stylesheet" href="../public/css/S_report.css" > 

<body>
    <div class="container">
        <div class="column-left">
            <div class="column-left-uprow">
                <div class="uprow">
                    <img src="<?php echo URLROOT ?>/public/img/shop1.png" style="width:100px; height:100px;"/>
                </div>
                <div class="uprow">
                    <h5 style="padding:10px 0 0 10px">Hello</h5>
                    <h2 style="padding:30px 0 0 0" >Garden Center</h2>
                </div>
            </div>
            <div class="box1"><ul>
            <a href="<?php echo URLROOT; ?>/Sellers/dashboard"><li><div class="box1-row" >Dashboard</div></li></a>
            <a href="<?php echo URLROOT ?>/Sellers/orderhistory"><li><div class="box1-row">Orders</div></li></a>
            <a href="<?php echo URLROOT ?>/Sellers/store"><li><div class="box1-row">Store</div></li></a>
            <a href="<?php echo URLROOT ?>/Sellers/notification"><li><div class="box1-row">Notification</div></li></a>
            <a href="<?php echo URLROOT ?>/Sellers/report"><li><div class="box1-row" id="active">Report</div></li></a>
            </div>
                
        </div>
        <div class="vertical"></div>
        
        <div class="column-right">
            <div class="repo">
                <div><h1 style="padding:0px 0 0 0px">Sales Report</h1></div><br>
                <div class="search"> 
                    <span class="search">From: <input type="date" name="" class="datepicker">  </span>                        
                    <span class="search">To:<input type="date" name="" class="datepicker">  </span>
                    <button > Generate </button>    
                </div>

                <table>
                <tr>
                    <th>Order No</th>
                    <th>Customer Name</th>
                    <th>Payement Method</th>
                    <th>Date & Time</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    
                </tr>
                </table>

            </div>
            

            <div class="repo">
                <div class="topic">Inventory Report</div>
                <div class="search"> 
                    
                    <span class="search">From: <input type="date" name="" class="datepicker"> </span>
                        
                    <span class="search">To:<input type="date" name="" class="datepicker">  </span>
                        
                    <button > Generate </button>
                   
                </div>
                <?php foreach($data['driver'] as $driver): ?>
                <table>
                <tr>
                    <th>Order No</th>
                    <th>Customer Name</th>
                    <th>Payement Method</th>
                    <th>Date & Time</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    
                </tr>
                </table>
                <?php endforeach; ?>
            </div>
            
        </div >
    </div>
    
</body>
<?php require APPROOT . '/views/includes/footer.php';?>