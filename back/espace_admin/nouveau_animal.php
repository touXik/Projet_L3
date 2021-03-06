<?php
require('../bdd/config.php');
require('../functions.php');
 
if(isset($_GET['categorie'])) {
   $get_categorie = htmlspecialchars($_GET['categorie']);
   $categorie = $bdd->prepare('SELECT * FROM f_categories WHERE id = ?');
   $categorie->execute(array($get_categorie));
   $cat_exist = $categorie->rowCount();
   $name_cat=  $bdd -> prepare('SELECT nom FROM f_categories WHERE id=?');
   $name_cat->execute(array($get_categorie));
     $name_cat=$name_cat->fetch()['nom'];
   if($cat_exist == 1) {
      $categorie = $categorie->fetch();
      $categorie = $categorie['nom'];
      $souscategories = $bdd->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ? ORDER BY nom');
      $souscategories->execute(array($get_categorie));
      
         if(isset($_POST['tsubmit'])) {
            if(isset($_POST['tsujet'],$_POST['tcontenu'])) {

                
                

               $sujet = htmlspecialchars($_POST['tsujet']);
               $contenu = htmlspecialchars($_POST['tcontenu']);
               $souscategorie = htmlspecialchars($_POST['souscategorie']);
            
               $verify_sc = $bdd->prepare('SELECT id FROM f_souscategories WHERE id = ? AND id_categorie = ?');
               $verify_sc->execute(array($souscategorie,$get_categorie));
               $verify_sc = $verify_sc->rowCount();
               if($verify_sc == 1) {
                  if(!empty($sujet) AND !empty($contenu)) {
                     if(strlen($sujet) <= 70) {
                
                        $ins = $bdd->prepare('INSERT INTO f_animaux (sujet, contenu,  date_heure_creation ,date_edit) VALUES(?,?,NOW(),NOW())');
                        $ins->execute(array($sujet,$contenu));
                        $lastid = $bdd->lastInsertId();
                        
                       
                        
             

                        $lt = $bdd->query('SELECT id FROM f_animaux ORDER BY id DESC LIMIT 0,1');
                        $lt = $lt->fetch();
                        $id_animal = $lt['id'];
                        $ins = $bdd->prepare('INSERT INTO f_animaux_categorie (id_animal, id_categorie, id_souscategorie) VALUES (?,?,?)');
                        $ins->execute(array($id_animal, $get_categorie, $souscategorie));
           
                        if(isset($_FILES['img']) AND !empty($_FILES['img']['name'])) {
                        
                           $tailleMax = 3097152;
                           $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
                           if($_FILES['img']['size'] <= $tailleMax) {
                              $extensionUpload = strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));
                              if(in_array($extensionUpload, $extensionsValides)) {
                                 $chemin = "img/".$lt['id'].".".$extensionUpload;
                                 $resultat = move_uploaded_file($_FILES['img']['tmp_name'], $chemin);
                                 if($resultat) {
                                    $updateimg = $bdd->prepare('INSERT INTO images (img,id_animal) VALUES (?,?)');
                                    $updateimg->execute(array($lt['id'].".".$extensionUpload,$lt['id']));
   
                               
                                 } else {
                                    $msg = "Erreur durant l'importation de votre photo de profil";
                                 }
                              } else {
                                 $msg = "Votre photo de profil doit ??tre au format jpg, jpeg, gif ou png";
                              }
                           } else {
                              $msg = "Votre photo de profil ne doit pas d??passer 2Mo";
                           }
                        }
      
                     } else {
                        $terror = "Votre sujet ne peut pas d??passer 70 caract??res";
                     }
                  } else {
                     $terror = "Veuillez compl??ter tous les champs";
                  }
               } else {
                  $terror = "Sous-cat??gorie invalide";
               }
            }
         }
      
   } else {
      die('Cat??gorie invalide...');
   }
} else {
   die('Aucune cat??gorie d??finie...');
}

  require('views/nouveau_animal.view.php'); 

      ?>

