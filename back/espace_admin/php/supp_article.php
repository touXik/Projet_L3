<?php
 
 include 'config.php';



if(isset($_GET['id']) AND !empty($_GET['id'])){
    
  $suppr_id=htmlspecialchars($_GET['id']);
  $suppr=$bdd->prepare('DELETE FROM f_animaux WHERE id=?');
  $suppr->execute(array($suppr_id)); 
   $categorie=$bdd-> prepare('SELECT id_categorie FROM f_animaux_categorie WHERE id_animal= ?');
   $categorie->execute(array($suppr_id));
   $a=$categorie->fetch()['id_categorie'];
   
        //  echo $suppr_id ;
        //  echo $a;
  //  $extra='forum_animaux.php?categorie=$categorie';
  header("Location:../forum_animaux.php?categorie=$a");
    //  echo " hhhh $categorie ";
      // echo"$extra";
 

}else{
  echo 'probl inco';
}


?>