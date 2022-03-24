
<head>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/mycart.css"> 
<?php include_once APPROOT . '/views/includes/header.php'; ?> 

</head>
<body>
     <div class="container">
         <div class="column-left" >
            <div id="ex1">
                <div class="left-row">
                    <div class="box">
                        <h4>box</h4>
                        <div class="quantity">
                            <button class="plus-btn" type="button" name="button">+</button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">-</button>
        
                        </div>
                    </div>
                    <div class="box">
                        <h4>box2</h4>
                    </div>
                    <div class="box">
                        <h4>box3</h4>
                    </div>
                </div>
                <div class="left-row">
                    <div class="box">
                        <h4>box</h4>
                    </div>
                    <div class="box">
                        <h4>box2</h4>
                    </div>
                    <div class="box">
                        <h4>box3</h4>
                    </div>
                </div>
                <div class="left-row">
                    <div class="box">
                        <h4>box</h4>
                    </div>
                    <div class="box">
                        <h4>box2</h4>
                    </div>
                
                </div>
            </div>
            <div>
                <input type="submit" name="continue" class="button" value="Continue Shopping" onclick="location.href="/>
                <input type="submit" name="checkout" class="button" value="CheckOut" />
            </div>
        </div>
    <!-- cart -->      
        <div class="column-right">
            <div id="ex1">
                <div class="cart-row">
                    <div class="cart-column">
                        <h5><input type="checkbox" id="mycheck" >Select all<h5>
                    </div>
                    <div class="cart-column">
                        <h5>Price</h5>
                    </div>
                    <div class="cart-column">
                        <h5>Value</h5>
                    </div>
                </div>
            <!-- Shop 1-->    
                <div class="cart-row">
                    <div class="cart-column">
                        <h5>Shop 1<h5>
                    </div>
                <!-- plant 1-->    
                </div>
                <div class="cart-row">
                    <div class="cart-column">
                       <span> <input type="checkbox" id="mycheck" class="mycheck" ></span>
                       <span class="discription" ><img src="<?php echo URLROOT ?>/public/img/p1.jpg" style="width:50px; height:50px;"/></span>
                       <span class="discription"  ><h5>Item 1</h5></span>
                    </div>
                    <div class="cart-column">
                        <h5>700/-</h5>
                    </div>
                    <div class="cart-column">
                        <span><h5>1400/-</h5></span>
                        <span class="delete-btn"><img src="<?php echo URLROOT ?>/public/img/p6.jpg" style="width:20px; height:20px; padding-left: 20px; padding-top: 20px;"></span>
                    </div>
                </div>
                <!--plant 2-->
                <div class="cart-row">
                    <div class="cart-column">
                       <span> <input type="checkbox" id="mycheck" ></span>
                       <span class="discription" ><img src="<?php echo URLROOT ?>/public/img/p7.jpg" style="width:50px; height:50px;"/></span>
                       <span class="discription"  ><h5>Item 1</h5></span>
                    </div>
                    <div class="cart-column">
                        <h5>700/-</h5>
                    </div>
                    <div class="cart-column">
                        <h5>1400/-</h5>
                    </div>
                </div>
                <!--shop 2-->
                <div class="cart-row">
                    <div class="cart-column">
                        <h5>Shop 2<h5>
                    </div>
                    
                </div>
                <div class="cart-row">
                    <div class="cart-column">
                       <span> <input type="checkbox" id="mycheck"  ></span>
                       <span class="discription" ><img src="<?php echo URLROOT ?>/public/img/p8.jpg" style="width:50px; height:50px;"/></span>
                       <span class="discription"  ><h5>Item 1</h5></span>
                    </div>
                    <div class="cart-column">
                        <h5>700/-</h5>
                    </div>
                    <div class="cart-column">
                        <h5>1400/-</h5>
                    </div>
                </div>
                <div class="cart-row">
                    <div class="cart-column">
                       <span> <input type="checkbox" id="mycheck" ></span>
                       <span class="discription" ><img src="<?php echo URLROOT ?>/public/img/p12.jpg" style="width:50px; height:50px;"/></span>
                       <span class="discription"  ><h5>Item 1</h5></span>
                    </div>
                    <div class="cart-column">
                        <h5>700/-</h5>
                    </div>
                    <div class="cart-column">
                        <h5>1400/-</h5>
                    </div>
                </div>
            </div>
            <div class="box-total">
                <div class="cart-row">
                    <div class="cart-column">
                        <h5>Total<h5>
                    </div>
                    <div class="cart-column">
                        <h5>xxxxx/-</h5>
                    </div>
                </div>
                <div class="cart-row">
                    <div class="cart-column">
                        <h5>Discount<h5>
                    </div>
                    <div class="cart-column">
                        <h5>xx/-</h5>
                    </div>
                </div>
                <div class="cart-row">
                    
                    <div class="cart-column">
                        
                        <h5>Pay<h5>
                    </div>
                    <div class="cart-column">
                        
                        <h5>xxxx/-</h5>
                    </div>
                </div>

            </div>

        </div>
    </div>
    
    
    

</body>