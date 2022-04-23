<?php
require('../bdd/config.php');
require('../functions.php');
if(isset($_GET['titre'],$_GET['id']) AND !empty($_GET['titre']) AND !empty($_GET['id'])) {
   $get_titre = htmlspecialchars($_GET['titre']);
   $get_id = htmlspecialchars($_GET['id']);
   $titre_original = $bdd->prepare('SELECT sujet FROM f_animaux  WHERE id = ?');
   $titre_original->execute(array($get_id));
   $titre_original = $titre_original->fetch()['sujet'];
   $images = $bdd->prepare('SELECT img FROM images WHERE id_animal = ?');
   $images->execute(array($get_id));
   $images = $images->fetch();
   //   $images=$bdd -> prepare ('SELECT img FROM images WHERE id_animal= ?');
      //  $images->execute(array($get_name));
      //  $images = $images-> fetch()['img'];
  
   if($get_titre == url_custom_encode($titre_original)) {
      $animal = $bdd->prepare('SELECT * FROM f_animaux  WHERE id = ?');
      $animal->execute(array($get_id));
      $animal = $animal->fetch(); 
      // $images = $bdd->prepare('SELECT img FROM images WHERE id_animal = ?');
      // $images->execute(array($get_id));
      // $images = $images->fetch();
      
      //  $images = $bdd->prepare('SELECT img FROM images WHERE id_animal = ?');
      // $images->execute(array($animal['id_createur']));
      // $images = $images->fetch();
   } else {
      die('Erreur: Le titre ne correspond pas à l\'id');
   }
   require('views/animal.view.php');
} else {
   die('Erreur...');
}


           
       
            
            ?>
          