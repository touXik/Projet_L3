<?php
require('../bdd/config.php');
$categories = $bdd->query('SELECT * FROM f_categories ORDER BY nom');
$subcat = $bdd->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ? ORDER BY nom');

require('views/forum.view.php');

?>
