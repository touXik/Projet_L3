<?php
require('../bdd/config.php'); /* Contient la connexion à la $bdd */
$categories = $bdd->query('SELECT * FROM f_categories ORDER BY nom');
$subcat = $bdd->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ? ORDER BY nom');

require('views/forum.view.php');

?>

<!-- <script src="https://kit.fontawesome.com/9f75563516.js" crossorigin="anonymous"></script> -->