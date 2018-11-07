<?php require('php/get_user.php'); ?>

<?php
$title = 'Test';
$description = 'Test';
 ?>

 <?php include_once('layouts/header.php'); ?>

 <div class="container mt-5">
   <a href="users" class= "btn btn-dark"> BLABLA </a>

   <h1><?php echo $user->username; ?></h1>
   <p><?php echo $user->bio ?></p>

   <ul>
     <li>
     </li>
   </ul>

 </div>
