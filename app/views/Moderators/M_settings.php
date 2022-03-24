<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Moderator.css">
    

     <style>

      </style>
  </head>

<body>
<?php include_once APPROOT . '/views/includes/M_sidenav.php'; ?> 
  <section class="home-section">
    <nav>
      <div class="sidebar-topic">
        <span class="dashboard">Settings</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="boxes">
        <div class="newreq box">
          
          <div class="title">Profile</div>
            <div style="margin-top: 20px;">
            <?php foreach($data['moderator'] as $moderator): ?>
              <form action="<?php echo URLROOT ?>/moderators/M_settings" method="POST">
               
                <label for="email">Email</label>
                <input type="text" id="email" name="email" disabled="disable" value="<?php echo $moderator->email; ?> ">

              <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="boxes" style="margin-top: 20px;">
        <div class="newreq box">
          <div class="title">Change password</div>
            <div style="margin-top: 20px;">
            <form action="<?php echo URLROOT ?>/moderators/M_settings" method="POST">
            <label for="cpass">Current password</label>
                <input type="text" id="cpass" name="cpassword" placeholder="Current password">
                <span style="color:red;">
                <?php echo $data['currentPasswordError']; ?>
                </span><br>
          
                <label for="npass">New password</label>
                <input type="text" id="npass" name="npassword" placeholder="New password">
                <span style="color:red;">
                <?php echo $data['passwordError']; ?>
                </span>
          
                <label for="cnpass">Confirm new password</label>
                <input type="text" id="cnpass" name="cnpassword" placeholder="Confirm new password">
                <span style="color:red;">
                <?php echo $data['confirmPasswordError']; ?>
                </span>
                
                <input type="submit" value="Cancel" style="background-color: crimson;">
                <input type="submit" value="Change password">
              </form>
          </div>
        </div>
      </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>



</body>
</html>

