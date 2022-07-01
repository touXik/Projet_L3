<?php
 
 include '../../bdd/config.php';

 if(isset($_GET['id']) AND !empty($_GET['id'])){
    
  $suppr_id=htmlspecialchars($_GET['id']);
  $suppr=$bdd->prepare('DELETE FROM demande WHERE id=?');
  $suppr->execute(array($suppr_id));

  header("Location:../afficher_demande.php");


}else{
  echo 'probl inco';
}


?>