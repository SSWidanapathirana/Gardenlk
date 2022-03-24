<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/forum.css">
    
</head>

<?php include_once APPROOT . '/views/includes/header.php'; ?>
<body>
<h1 class="heading">Discussion Forum</h1> 


<?php if(isLoggedIn()): ?>
<a href="<?php echo URLROOT; ?>/pages/AddDiscussion"><button class="block">Add New Discussion</button></a>
<?php endif; ?>
<div class="search-container">
<form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><img src="<?php echo URLROOT ?>/public/img/search.png" style="width: 35%;height:35%"></button></form> 
</div>  



<?php foreach($data['posts'] as $post ): ?>
<a href="<?php echo URLROOT ?>/pages/forum_view"><table class="table1">
      <tr>
        <th rowspan="2"><img src="<?php echo URLROOT ?>/public/img/profile1.png" class="profile_forum"></th>
        <th style="text-align:left;"> <?php echo $post->topic; ?> </th>
        <th rowspan="2"><img src="<?php echo URLROOT ?>/public/img/msg.png" class="icon_forum"></th>
        <th rowspan="2"><img src="<?php echo URLROOT ?>/public/img/menu.png" class="icon_forum"></th>
        <th rowspan="2">
        <img src="<?php echo URLROOT ?>/public/img/vote.png" class="voteIcon_forum">
        </th>
        
      </tr>
      <tr>
        <td>On: <?php echo date('F j h:m', strtotime($post->created_at))  ?></td>
      </tr>
    </table>
  </a>
    <?php endforeach; ?>

</body>
<?php include_once APPROOT . '/views/includes/footer.php'; ?> 
</html>