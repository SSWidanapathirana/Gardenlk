
<?php require APPROOT . '/views/includes/header.php';?>
<link rel="stylesheet" href="../public/css/S_orderHistory.css" > 

<script>
    function search(){
    var list=document.getElementId("list");
    document.getElementId("search").value=list.options[list.selectedIndex].text;
    }
</script>
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
            <a href="<?php echo URLROOT ?>/Sellers/dashboard"><li><div class="box1-row">Dashboard</div></li></a>
            <a href="<?php echo URLROOT ?>/Sellers/orderhistory"><li><div class="box1-row" id="active">Orders</div></li></a>
            <a href="<?php echo URLROOT ?>/Sellers/store"><li><div class="box1-row">Store</div></li></a>
            <a href="<?php echo URLROOT ?>/Sellers/notification"><li><div class="box1-row" >Notification</div></li></a>
            <a href="<?php echo URLROOT ?>/Sellers/report"><li><div class="box1-row">Report</div></li></a>
            <div class="orderimage"><img src="<?php echo URLROOT ?>/public/img/orderhisimg.png" style="width:300px; height:380px"></div>
        </div>    
    </div>

    <div class="vertical"></div>
    <div class="column-right">
        <div><h1 style="padding:0px 0 0 400px">Orders</h1></div><br>
        <div>
            <span id="search">Search By: 
                <select id="list" onchange="search()" class="dropdown-content">
                    <option><a href="#abc">All</a></option>
                    <option><a href="#abc">Date</a></option>
                    <option><a href="#abc">Name</a></option>
                </select>
            </span>
            <span class="search">From: <input type="date" name="" class="datepicker">  </span>
            <span class="search">To: <input type="date" name="" class="datepicker">  </span>
        </div>
        <div id="ex1">
            <div class="box">
                <div style="width:20%;" class="box-column">
                    <h5 id="box-row2" class="topic-text">Order Date</h5>
                    <h5 id="box-row2">Date</h5>
                </div>            
                <div style="width:20%;" class="box-column" >
                    <h4 id="box-row2" class="topic-text">Total</h4>
                    <h5 id="box-row2">Rs.500/-</h5>
                    <h5 id="box-row2">cash on hand</h5>
                </div>
                <div style="width:20%;" class="box-column" >
                    <h5 id="box-row2" class="topic-text">Status</h5>
                    <h5 id="box-row2">status</h5>
                </div>
                <div style="width:20%;" class="box-column">
                    <h5 id="box-row2" class="topic-text">Name</h5>
                    <h5 id="box-row2">Name</h5>
                </div>
                <div style="width:20%;" class="box-button" >
                    <button class="button" style="background-color:#154614;">delete</button>
                    <a href="<?php echo URLROOT ?>/Sellers/orderDetail"><button class="button" style="background-color:#306C00;">view</button></a>
                    
                </div>
            </div>
            <div class="box">
                <div style="width:20%;" class="box-column">
                    <h5 id="box-row2" class="topic-text">Order Date</h5>
                    <h5 id="box-row2">Date</h5>
                </div>            
                <div style="width:20%;" class="box-column" >
                    <h4 id="box-row2" class="topic-text">Total</h4>
                    <h5 id="box-row2">Rs.500/-</h5>
                    <h5 id="box-row2">cash on hand</h5>
                </div>
                <div style="width:20%;" class="box-column" >
                    <h5 id="box-row2" class="topic-text">Status</h5>
                    <h5 id="box-row2">status</h5>
                </div>
                <div style="width:20%;" class="box-column">
                    <h5 id="box-row2" class="topic-text">Name</h5>
                    <h5 id="box-row2">Name</h5>
                </div>
                <div style="width:20%;" class="box-button" >
                    <button class="button" style="background-color:#154614;">delete</button>
                    <a href="<?php echo URLROOT ?>/Sellers/orderDetail"><button class="button" style="background-color:#306C00;">view</button></a>
                    
                </div>
            </div>
            <div class="box">
                <div style="width:20%;" class="box-column">
                    <h5 id="box-row2" class="topic-text">Order Date</h5>
                    <h5 id="box-row2">Date</h5>
                </div>            
                <div style="width:20%;" class="box-column" >
                    <h4 id="box-row2" class="topic-text">Total</h4>
                    <h5 id="box-row2">Rs.500/-</h5>
                    <h5 id="box-row2">cash on hand</h5>
                </div>
                <div style="width:20%;" class="box-column" >
                    <h5 id="box-row2" class="topic-text">Status</h5>
                    <h5 id="box-row2">status</h5>
                </div>
                <div style="width:20%;" class="box-column">
                    <h5 id="box-row2" class="topic-text">Name</h5>
                    <h5 id="box-row2">Name</h5>
                </div>
                <div style="width:20%;" class="box-button" >
                    <button class="button" style="background-color:#154614;">delete</button>
                    <a href="<?php echo URLROOT ?>/Sellers/orderDetail"><button class="button" style="background-color:#306C00;">view</button></a>
                    
                </div>
            </div>
            <div class="box">
                <div style="width:20%;" class="box-column">
                    <h5 id="box-row2" class="topic-text">Order Date</h5>
                    <h5 id="box-row2">Date</h5>
                </div>            
                <div style="width:20%;" class="box-column" >
                    <h4 id="box-row2" class="topic-text">Total</h4>
                    <h5 id="box-row2">Rs.500/-</h5>
                    <h5 id="box-row2">cash on hand</h5>
                </div>
                <div style="width:20%;" class="box-column" >
                    <h5 id="box-row2" class="topic-text">Status</h5>
                    <h5 id="box-row2">status</h5>
                </div>
                <div style="width:20%;" class="box-column">
                    <h5 id="box-row2" class="topic-text">Name</h5>
                    <h5 id="box-row2">Name</h5>
                </div>
                <div style="width:20%;" class="box-button" >
                    <button class="button" style="background-color:#154614;">delete</button>
                    <a href="<?php echo URLROOT ?>/Sellers/orderDetail"><button class="button" style="background-color:#306C00;">view</button></a>
                    
                </div>
            </div>
            <div class="box">
                <div style="width:20%;" class="box-column">
                    <h5 id="box-row2" class="topic-text">Order Date</h5>
                    <h5 id="box-row2">Date</h5>
                </div>            
                <div style="width:20%;" class="box-column" >
                    <h4 id="box-row2" class="topic-text">Total</h4>
                    <h5 id="box-row2">Rs.500/-</h5>
                    <h5 id="box-row2">cash on hand</h5>
                </div>
                <div style="width:20%;" class="box-column" >
                    <h5 id="box-row2" class="topic-text">Status</h5>
                    <h5 id="box-row2">status</h5>
                </div>
                <div style="width:20%;" class="box-column">
                    <h5 id="box-row2" class="topic-text">Name</h5>
                    <h5 id="box-row2">Name</h5>
                </div>
                <div style="width:20%;" class="box-button" >
                    <button class="button" style="background-color:#154614;">delete</button>
                    <a href="<?php echo URLROOT ?>/Sellers/orderDetail"><button class="button" style="background-color:#306C00;">view</button></a>
                </div>
            </div>

        </div>
    </div>
</div>
<div><?php require APPROOT . '/views/includes/footer.php';?></div>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

function myFunction() {
  document.getElementById("search").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.button')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>