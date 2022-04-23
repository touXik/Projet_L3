<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: ../../html/login_admin.html');
  }


  ?>

 
  
  <?php
  include 'forum.php';
  
  

 
?>