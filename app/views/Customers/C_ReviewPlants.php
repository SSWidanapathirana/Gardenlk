
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/C_Orders.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         </head>
        
   
    <body>
    <?php include_once APPROOT . '/views/includes/header.php'; ?>
    <body>
    
     <div class="row">
     
     <?php include_once APPROOT . '/views/includes/C_sidenav.php'; ?>
    
    <!--horizontal line-->
    <div class="vl"></div>  
    
    
    <div class="col2">
        <h2>My Orders - To Review</h2>
        <div class="topnav">
            <a href="<?php echo URLROOT ?>/Customers/C_OrdersToReview" id="active">To Review</a>
            <a href="<?php echo URLROOT ?>/Customers/C_OrdersHistory">History</a>
        </div>
            <br>           
        <div>
        <?php foreach($data['delivery'] as $orderDetails): ?>
            <?php foreach($data['plants'] as $plantDetails): ?>
            <table class="orders-table">
              
                    <tr class="orders-table-head">
                        <td colspan="3">OrderNo - <?php echo $orderDetails->order_id; ?></td>
                        <td colspan="3">Placed On <?php echo $orderDetails->createdOn; ?></td>
                    </tr>

                    
                        <td><img src="<?php echo URLROOT ?>/public/img/<?php echo $plantDetails->img1; ?>" class="imgplant"></td>
                        <td style="text-align:left;">Here comes a description about the plant with color and size. Also you can mention the selling items like pots including or not</td>
                        
                     <td colspan="4">
             <div class="rating">
                    <!-- Thumbs up -->
                    <div>
                    <div class="like grow">
                        <input type="hidden" id="like" name="LikeDislike" value="like" />
                        <i class="fa fa-thumbs-up fa-3x like" aria-hidden="true" style="font-size: 2rem;"></i>
                    </div>
                    <!-- Thumbs down -->
                    <div class="dislike grow">
                        <input type="hidden" id="dislike" name="LikeDislike" value="dislike" />
                        <i class="fa fa-thumbs-down fa-3x like" aria-hidden="true" style="font-size: 2rem;"></i>
                    </div></div>
                </div></td>  
        
                   
                
            </table> 
            <?php endforeach; ?>
             <?php endforeach; ?>
            </div><br>  
            <button type="submit" class="button1" >Submit</button>





        
 

    </div>
    </div>
    <script>
            $('.like, .dislike').on('click', function() {
            event.preventDefault();
            $('.active').removeClass('active');
            $(this).addClass('active');
            });
        </script>

    </body>
    
    <?php include_once APPROOT . '/views/includes/footer.php'; ?>