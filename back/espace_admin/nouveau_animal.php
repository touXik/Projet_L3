<?php
require('../bdd/config.php'); /* Connexion à la base de donnée */
require('../functions.php'); /* Mes fonctions */
 
if(isset($_GET['categorie'])) {
   $get_categorie = htmlspecialchars($_GET['categorie']);
   $categorie = $bdd->prepare('SELECT * FROM f_categories WHERE id = ?');
   $categorie->execute(array($get_categorie));
   $cat_exist = $categorie->rowCount();
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
                 var_dump($_FILES);
                  var_dump(exif_imagetype($_FILES['img']['tmp_name']));
               $verify_sc = $bdd->prepare('SELECT id FROM f_souscategories WHERE id = ? AND id_categorie = ?');
               $verify_sc->execute(array($souscategorie,$get_categorie));
               $verify_sc = $verify_sc->rowCount();
               if($verify_sc == 1) {
                  if(!empty($sujet) AND !empty($contenu)) {
                     if(strlen($sujet) <= 70) {
                        // if(isset($_POST['tmail'])) {
                        //    $notif_mail = 1;
                        // } else {
                        //    $notif_mail = 0;
                        // }
                        $ins = $bdd->prepare('INSERT INTO f_animaux (sujet, contenu,  date_heure_creation ,date_edit) VALUES(?,?,NOW(),NOW())');
                        $ins->execute(array($sujet,$contenu));
                        $lastid = $bdd->lastInsertId();
                        
                       
                        
             

                        $lt = $bdd->query('SELECT id FROM f_animaux ORDER BY id DESC LIMIT 0,1');
                        $lt = $lt->fetch();
                        $id_animal = $lt['id'];
                        $ins = $bdd->prepare('INSERT INTO f_animaux_categorie (id_animal, id_categorie, id_souscategorie) VALUES (?,?,?)');
                        $ins->execute(array($id_animal, $get_categorie, $souscategorie));
                         
                        $act=1;
                        $ajout="nouvaux $souscategorie ajouter";
                        $s_ajout=" $sujet $contenu ";
                        $notife= $bdd -> prepare('INSERT INTO inf (notifications_name, message, active) VALUES(?,?,?)');
                        $notife -> execute(array($ajout,$contenu,$act));


                        if(isset($_FILES['img']) AND !empty($_FILES['img']['name'])) {
                           // $tailleMax = 2097152;
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
   
                                    // header('Location: animal.view.php?id='.$lt['id']);
                                 } else {
                                    $msg = "Erreur durant l'importation de votre photo de profil";
                                 }
                              } else {
                                 $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
                              }
                           } else {
                              $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
                           }
                        }
            // if(isset($_FILES['img'])AND !empty($_FILES['img']['name'])){
            //   if(exif_imagetype($_FILES['img']['tmp_name'])==2){
            //       $chemin= 'img/'.$lastid.'.jpg';
            //       move_uploaded_file($_FILES['img']['tmp_name'],$chemin);
            //   } else{
            //       $message='Votre image doit etre au format jpg';
            //   }
            // }
         

                     } else {
                        $terror = "Votre sujet ne peut pas dépasser 70 caractères";
                     }
                  } else {
                     $terror = "Veuillez compléter tous les champs";
                  }
               } else {
                  $terror = "Sous-catégorie invalide";
               }
            }
         }
      
   } else {
      die('Catégorie invalide...');
   }
} else {
   die('Aucune catégorie définie...');
}

  require('views/nouveau_animal.view.php'); /* Inclusion du fichier vue */

      ?>

      <!-- //nouveau animal php -->