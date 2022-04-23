<?php
require('../bdd/config.php');
require('../functions.php');
if(isset($_GET['categorie']) AND !empty($_GET['categorie'])) {
   $get_categorie = htmlspecialchars($_GET['categorie']);
   $categories = array();
   $req_categories = $bdd->query('SELECT * FROM f_categories');
   while($c = $req_categories->fetch()) {
      array_push($categories, array($c['id'],url_custom_encode($c['nom'])));
   }
   foreach($categories as $cat) {
      if(in_array($get_categorie, $cat)) {
         $id_categorie = intval($cat[0]);
      }
   }
   if(@$id_categorie) {
      if(isset($_GET['souscategorie']) AND !empty($_GET['souscategorie'])) {
         $get_souscategorie = htmlspecialchars($_GET['souscategorie']);
         $souscategories = array();
         $req_souscategories = $bdd->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ?');
         $req_souscategories->execute(array($id_categorie));
         while($c = $req_souscategories->fetch()) {
            array_push($souscategories, array($c['id'],url_custom_encode($c['nom'])));
         }
         foreach($souscategories as $cat) {
            if(in_array($get_souscategorie, $cat)) {
               $id_souscategorie = intval($cat[0]);
            }
         }
      }
    
      $req = "SELECT *, f_animaux.id animal_base_id FROM f_animaux
            LEFT JOIN f_animaux_categorie ON f_animaux.id = f_animaux_categorie.id_animal
            LEFT JOIN f_categories ON f_animaux_categorie.id_categorie = f_categories.id
            LEFT JOIN f_souscategories ON f_animaux_categorie.id_souscategorie = f_souscategories.id
            LEFT JOIN images ON f_animaux.id = images.id_animal 
            WHERE f_categories.id = ?";
      if(@$id_souscategorie) {
         $req .= " AND f_souscategories.id = ?";
         $exec_array = array($id_categorie,$id_souscategorie);
      } else {
         $exec_array = array($id_categorie);
      }
      $req .= " ORDER BY f_animaux.id DESC";
      
      $animaux = $bdd->prepare($req);
      $animaux->execute($exec_array);
   } else {
      die('Erreur: Catégorie introuvable...');
   }
} else {
   die('Erreur: Aucune catégorie sélectionnée...');
}
require('views/forum_animaux.view.php');
?>