<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/A_users.css">

     <style>
      p{
        margin-bottom: 15px;
      }
      img{
        float: left;
        margin-top: 0.5%;
        margin-bottom: 0.5%;
        margin-right: 3%;
        height: 260px;
        width: 300px;
      }
      .row{
          display: flex;
      }
      .column{
        flex: 50%;      
      }
      </style>

   </head>

<body>
<?php include_once APPROOT . '/views/includes/A_sidenav.php'; ?> 
  <section class="home-section">
    <nav>
      <div class="sidebar-topic">
        <span class="dashboard">Manage Users - Delivery Person</span>
      </div>
      <button class="buttonadd" onclick="document.location='<?php echo URLROOT ?>/admins/A_users_adduser'">Add user</button>
    </nav>
    <?php include_once APPROOT . '/views/includes/A_users_header.php'; ?> 

      <div class="boxes">
        <div class="newreq box">
          <div>
            <div><img src="<?php echo URLROOT ?>/public/img/dpimg.jpeg" alt="image"></div>
              <div class="row">
                <div class="column">
                    <p>ID: </p>
                    <p>Name: </p>
                    <p>Address: </p>
                    <p>Marital State: </p>
                    <p>NIC Number: </p>
                    <p>Gender: </p>
                    <p>Email: </p>    
                </div>
                <div class="column">
                    <p>Contact Number: </p>
                    <p>Vehicle Type: </p>
                    <p>Vehicle Number: </p>
                    <p>Licence Type: </p>
                    <p>Licence Number: </p>
                    <p>Licence Expirery Date: </p>
                  <div>
                      <button class="buttonselection buttonselection2" style="float:right;" onclick="">Delete</button>
                      <button class="buttonselection buttonselection1" style="float:right;" onclick="document.location='<?php echo URLROOT ?>/admins/A_users_updateuser_delivery'" >Update</button> 
                  </div>
                </div>
              </div>  
          </div>
        </div>
      </div>
    </div>
  </section>



</body>
</html>

