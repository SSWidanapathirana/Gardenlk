<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/A_users.css">
     
   </head>

<body>
<?php include_once APPROOT . '/views/includes/A_sidenav.php'; ?> 
  <section class="home-section">
    <nav>
      <div class="sidebar-topic">
        <span class="dashboard">Manage Users - Customer</span>
      </div>
      <button class="buttonadd" onclick="document.location='<?php echo URLROOT ?>/admins/A_users_adduser'">Add user</button>
    </nav>
    <?php include_once APPROOT . '/views/includes/A_users_header.php'; ?> 
      <div class="boxes">
        <div class="userdetails box">
          
          <div class="user-details">
          <ul class="details">
              <li class="topic">ID</li>
              <li>1</li>
            </ul>
            <ul class="details">
              <li class="topic">Customer Name</li>
              <li>Pasindu</li>
            </ul>
            <ul class="details">
            <li class="topic">Email</li>
            <li>pasindu@pasindu.com</li>
          </ul>
          <ul class="details">
            <li class="topic">Address</li>
            <li>pasindu</li>
          </ul>
          <ul class="details">
            <li class="topic">Contact number</li>
            <li>1234567890</li>
          </ul>
          <ul class="details">
            <li class="topic">Selection</li>
            <li>
              <button class="buttonselection buttonselection1" onclick="document.location='<?php echo URLROOT ?>/admins/A_users_updateuser_customer'">Update</button>
              <button class="buttonselection buttonselection2">Delete</button>
            </li>
          </ul>
          </div>

        </div>
      </div>
    </div>
  </section>



</body>
</html>

