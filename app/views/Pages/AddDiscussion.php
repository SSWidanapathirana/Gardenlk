<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/AddDiscussion.css"> 

</head>   
    
    <body>
<?php include_once APPROOT . '/views/includes/header.php'; ?>

<div class="topic">Add Discussion Topic</div>

<form class="container1" action="<?php echo URLROOT; ?>/pages/AddDiscussion" method="post" >

    <input type="text" placeholder="Discussion Topic" name="title">
    <span style="color:red;">
        <?php echo $data['titleError']; ?>
    </span>

    <textarea placeholder="Note" name="body" rows="18" cols="100"></textarea>
    <span style="color:red;">
        <?php echo $data['bodyError']; ?>
    </span>

    <button type="submit" class="button1">Post</button>

</form>


<?php include_once APPROOT . '/views/includes/footer.php'; ?>
</body>
</html>