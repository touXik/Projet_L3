<?php
//   session_start();
//   if(!$_SESSION['pseudo']) {
//       header('Location: conexion.html');
//   }
  
require('..bdd/config.php');
require('../functions.php');
         
$mode_edit=0;

  if(isset($_GET['edit']) AND !empty($_GET['edit'])){
      $mode_edit=1;
      $edit_id=htmlspecialchars($_GET['edit']);
      $edit_animaux=$bdd -> prepare('SELECT * FROM f_animaux WHERE id= ?');
      $edit_animaux->execute(array($edit_id));

      if($edit_animaux->rowCount() == 1){
           $edit_animaux= $edit_animaux->fetch();
      }else{
          die('erreur larticle nexixte pas ');
      }
  }


if(isset($_POST['sujet'])){
    if(!empty($_POST['sujet']) AND !empty($_POST['contenu']) ){
               $sujet=htmlspecialchars($_POST['sujet']);
               $contenu=htmlspecialchars($_POST['contenu']);
              
          if($mode_edit==0){
              $inserAnimaux= $bdd-> prepare('INSERT INTO f_animaux (sujet,contenu,date_edit) VALUES(? , ? ,NOW())');
               $inserAnimaux-> execute (array($sujet, $contenu)); 
             
               echo' <h1>larticle a bine ajouter</h1>';
          }else{
              $update = $bdd->prepare('UPDATE f_animaux SET sujet=?,contenu=?,date_edit=NOW() WHERE id=?');
              $update->execute(array($sujet, $contenu,$edit_id)); 
            //    header('Location:affianimaux.php?id='.$edit_id);
              echo' <h1>larticle a bine mise ajoure</h1>';
          }
       
        

    }else{
        echo'<h1>vuiller compliter tout les champs</h1>';

    }
}

require('views/modifier_animal.view.php');
 
?>
