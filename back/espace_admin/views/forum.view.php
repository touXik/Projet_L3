   <!-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <div class="menu">
      
      <button><a class="bt" href="views/messages.view.php">Boit reception</a></button>
       <button><a class="bt" href="afficher_demande.php">Demande d'adoption</a></button> 
       <button ><a class="bt" href="php/logout.php"> Déconnexion</a></button>
   
 </div>
<table class="forum">
   <tr class="header">
   
      <th class="main">Catégories</th>
 
   </tr> -->
 
<!-- </table> -->

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
               <!-- <div class="title">
                       <h1>ajouter animaux</h1>
                      </div> -->
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

     <!-- <ul> -->
       <!-- <div class="cat">
        
          <div class="c1">
          <div class="images">
                  <a href="ajout_animaux/chiens.php">   <img src="../../images/chiens.jpg" ></a>
                  </div>
                    <div class="txt">
              <p> <a href="ajout_animaux/chiens.php">chiens</a> </p>
                        </div>
           </div>
       
           <div class="c1">
           <div class="images">
                    <a href="ajout_chats/chats.php"> <img src="../../images/chats.jpg" ></a>
                    </div>
                    <div class="txt">
               <p><a href="ajout_chats/chats.php">chats</a></p>
                     </div>
            </div>
           
           <div class="c1">
                          <div class="images">
                     <a href="ajout_equide/equide.php">  <img src="../../images/équidés.jpeg"></a>
                    </div>
                    <div class="txt">
                     <p><a href="ajout_equide/equide.php">Equidés</a></p>
                    </div>
             </div>
     
            <div class="c1">
            <div class="images">
                     <a href="ajout_rogneurs/rogneur.php"> <img src="../../images/rongeur.jpg"></a>
                     </div>
                    <div class="txt">
                    <p> <a href="ajout_rogneurs/rogneur.php">rogneurs</a></p>
                      </div>
             </div>
      </div>  -->
     <!-- </ul>-->
    
    
     <script src="https://kit.fontawesome.com/9f75563516.js" crossorigin="anonymous"></script>
  </body>
</html>

