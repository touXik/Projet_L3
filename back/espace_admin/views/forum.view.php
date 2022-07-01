
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../CSS/admin/admin.css">
   <link rel="icon" type="images/png" href="../../images/log2.jpeg">
  <title>ADMIN</title>
</head>
<body>
    <div class="menu">
      
      
         <button><a class="bt" href="views/messages.view.php">Boit reception</a></button>
       <button><a class="bt" href="afficher_demande.php">Demande d'adoption</a></button> 
       <button ><a class="bt" href="php/logout.php"> Déconnexion</a></button>
     
   </div>
        
<div class="section">

                      <?php
  require('php/functions.php');
   while($c = $categories->fetch()) {
      $subcat->execute(array($c['id']));
      $souscategories = '';
      while($sc = $subcat->fetch()) {
         $souscategories .= '<a href="forum_animaux.php?categorie='.url_custom_encode($c['nom']).'&souscategorie='.url_custom_encode($sc['nom']).'">'.$sc['nom'].'</a> | ';
      }
      $souscategories = substr($souscategories, 0, -3);
   ?>
        <div class="contener">
             <div class="con">
             
             <a href="forum_animaux.php?categorie=<?= url_custom_encode($c['nom']) ?>"><img src="../../images/icon/<?=$c['con']?>" alt="icone"></a>
             
             </div>
        <div class="txt_cat">
         <h1><a href="forum_animaux.php?categorie=<?= url_custom_encode($c['nom']) ?>"><?= $c['nom'] ?></a></h1>
         <p>
         <?= $souscategories ?>
         </p>
   
        </div>
 </div>
   <?php } ?>

    </div>

     <script src="https://kit.fontawesome.com/9f75563516.js" crossorigin="anonymous"></script>
  </body>
</html>

