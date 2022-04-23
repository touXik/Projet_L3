<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: ../conexion.html');
  }
  
  include '../bdd/config.php';
  $demande=$bdd -> query('SELECT * FROM demande ORDER BY date_env DESC');

  require('views/afficher_demande.view.php');
 
?>


