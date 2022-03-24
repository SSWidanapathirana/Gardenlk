<?php require APPROOT . '/views/includes/header.php';?>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/S_dashboard.css">

<body>
<div class="container">
<?php require APPROOT . '/views/includes/S_sidenav.php';?>
    <div class="column-right">
            <div>
                <h1 style="padding:0px 0 0 400px">DashBoard </h1>
            </div><br>
            
            <div class="box-list">
                <div class="box2">10<br>Completed</div>
                <div class="box2">10<br>Pending</div>
                <div class="box2">1<br>Cancelled</div>
                <div class="box2">170<br>All Plants</div>
            </div><br>
            <div class="box-list2">
                <a href="<?php echo URLROOT ?>/Sellers/dashboard_completed" id="text" id="active"><div><button name="complete" class="box3">Completed</button></div>
                <a href="<?php echo URLROOT ?>/Sellers/dashboard_pending" id="text"><div><button name="pending" class="box3" >Pending</button></div></a>
                <a href="<?php echo URLROOT ?>/Sellers/dashboard_cancelled" id="text"><div><button name="cancelled" class="box3">Cancelled</button></div></a>
                <a href="<?php echo URLROOT ?>/Sellers/dashboard_plants" id="text"><div><button name="plants" class="box3">Plants</button></div></a>        
            </div><br>
            
            <div class="frame1">
                <div class="repo">
                    <div class="search"> 
                        <span class="search">From: <input type="date" name="" class="datepicker">  </span>                        
                        <span class="search">To:<input type="date" name="" class="datepicker">  </span>      
                    </div>
                </div>
                <div id="ex1"> 
                    <div class="box">
                        <div style="width:25%;" class="box-column">
                            <h4 id="box-row2" class="topic-text">Order Date</h4>
                            <h3 id="box-row2">2021.12.12</h3>
                        </div>            
                        <div style="width:25%;" class="box-column" >
                            <h4 id="box-row2" class="topic-text">Name</h4>
                            <h3 id="box-row2">vimansa</h3>
                            
                        </div>
                        <div style="width:25%;" class="box-column" >
                            <h4 id="box-row2" class="topic-text">Order Total</h4>
                            <h3 id="box-row2">Rs.900.00</h3>
                        </div>
                        <div style="width:25%;" class="box-column">
                            <h4 id="box-row2" class="topic-text">Method</h4>
                            <h3 id="box-row2">Cah on hand</h3>
                        </div>     
                    </div>
                    
                    <div class="box">
                        <div style="width:25%;" class="box-column">
                            <h4 id="box-row2" class="topic-text">Order Date</h4>
                            <h3 id="box-row2">2021.12.12</h3>
                        </div>            
                        <div style="width:25%;" class="box-column" >
                            <h4 id="box-row2" class="topic-text">Name</h4>
                            <h3 id="box-row2">vimansa</h3>
                            
                        </div>
                        <div style="width:25%;" class="box-column" >
                            <h4 id="box-row2" class="topic-text">Order Total</h4>
                            <h3 id="box-row2">Rs.900.00</h3>
                        </div>
                        <div style="width:25%;" class="box-column">
                            <h4 id="box-row2" class="topic-text">Method</h4>
                            <h3 id="box-row2">Cah on hand</h3>
                        </div>     
                    </div>  
                </div>   
            </div> 
            <div class="box-list">
                <div class="box4">Top selling</div>
                <div class="box4">Top rated</div>            
            </div>    
    </div>
    
    
</div>
<?php require APPROOT . '/views/includes/footer.php';?>
</body>
 