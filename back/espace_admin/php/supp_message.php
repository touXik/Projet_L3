<?php
  // session_start();
  // if(!$_SESSION['pseudo']) {
  //     header('Location: conexion.html');
  // }
  
  include '../../bdd/config.php';

if(isset($_GET['id']) AND !empty($_GET['id'])){
    
      $suppr_id=htmlspecialchars($_GET['id']);
      $suppr=$bdd->prepare('DELETE FROM contact WHERE id=?');
      $suppr->execute(array($suppr_id));
      header('Location:../views/messages.view.php');
     

  }




?>