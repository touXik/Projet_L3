
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/admin/anime.css">
  <link rel="icon" type="images/png" href="../../images/log2.jpeg">
  <title>admin-<?=$get_categorie?></title>
</head>
<body>
              

          <div class="menu">         
     
           <button><a href="index.php"> accueil</a></button>
         <button><a href="nouveau_animal.php?categorie=<?= $id_categorie ?>"> ajouter <?=$get_categorie?> </a></button> 
         <button ><a href="../logout.php"> Déconnexion</a></button>

        </div>


                    



                          
                           <h1>  </h1>
                        

          
         <div class="banime">


                
                <?php while($t=$animaux->fetch()){
                     $idx_animal=$t['animal_base_id'];
                     $idx_scat=  $bdd -> prepare('SELECT id_souscategorie FROM f_animaux_categorie WHERE id_animal=?');
                     $idx_scat->execute(array($idx_animal));
                       $idx_scat=$idx_scat->fetch()['id_souscategorie'];

                       
 
                      $racex= $bdd -> prepare('SELECT nom FROM f_souscategories WHERE id=?');
                     $racex->execute(array($idx_scat));
                 
                     $racex= $racex->fetch()['nom'];
                    ?>
            <dive class="anime">
                       <div class="img">
                <img src="img/<?=$t['img']?>" >
                        </div>
                        

                        <div class="c">
                    <div class="txt">
                         <div class="nomc">
                <p><span> Nom:</span><a href="animal.php?titre=<?= url_custom_encode($t['sujet']) ?>&id=<?= $t['animal_base_id'] ?>"><?= $t['sujet'] ?></a></p>
                <p> <span> Categorie : </span><?= $racex?></p>
                              </div>
                        <div class="info">
                             <div class="dvi">
                        <h4>information :</h4>  
                             </div>
                             <div class="dvp">
                 <p ><?= $t['contenu'] ?></p>
                                </div>
                         </div>
                     </div>
                     <div class="button">
              
                <button class="s"><a href="php/supp_article.php?id=<?=$t['animal_base_id']?>">suprimer</a></button>
               
              <button class="m"><a href="modifier_animal.php?edit=<?=$t['animal_base_id']?>"> modifier</a></button>
   
                </div>
                        </div>
                </dive>
                  <?php } ?>
               
         </dive>
       
            
         
        
</body>
</html>
