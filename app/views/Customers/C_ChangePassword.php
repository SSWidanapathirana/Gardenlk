
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/C_ChangePassword.css"> 

</head>   
    
    <body>
    <?php include_once APPROOT . '/views/includes/header.php'; ?>

    <div class="plantImage"><img src="<?php echo URLROOT ?>/public/img/profileplant.png" width="271px" height="329px"></div>
    <div class="row">
     
    <?php include_once APPROOT . '/views/includes/C_sidenav.php'; ?>
    
    <!--horizontal line-->
    <div class="vl"></div>  
    
    
    <div class="col2"></div>
    
        <div class="profilebox">
    
            <h2 style="padding: 10px 10px 20px 235px">My Profile</h2>
    
            <form action="check.php" method="post">
                    <div class="container1">
                        <!-- <input type="text" placeholder="Full Name" name="fname" required>
                        <input type="email" placeholder="Email Address" name="email" required> -->
                        <input type="password" placeholder="Current Password" name="c-pwd" required>
                        <input type="password" placeholder="New Password" name="n-pwd" required>
                        <input type="password" placeholder="Confirm Password" name="re-pwd" required><br><br>
                        <button type="submit" class="button1" >Save Changes</button>
                        <button type="reset" class="button2">Cancel</button>
                    </div>
            </form>
    
    
        </div>
    </div>
    </div>
    <br>   
    <?php include_once APPROOT . '/views/includes/footer.php'; ?>

    </body>