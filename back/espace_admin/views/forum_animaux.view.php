



    <!-- ---------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../CSS/admin/anime.css">
  <link rel="icon" type="images/png" href="../../images/log2.jpeg">
  <title>admin-chiens</title>
</head>
<body>
              

          <div class="menu">         
     
           <button><a href="index.php"> accueil</a></button>
         <button><a href="nouveau_animal.php?categorie=<?= $id_categorie ?>"> ajouter animal</a></button> 
         <button ><a href="../logout.php"> Déconnexion</a></button>
         
        </div>


                    



                          
                           <h1>  </h1>
                        

          
         <div class="banime">


                
                <?php while($t=$animaux->fetch()){ ?>
            <dive class="anime">
                       <div class="img">
                  <a href="affichiens.php?id=<?=$c['id']?>"><img src="img/<?=$t['img']?>" > </a>
                        </div>
                        

                        <div class="c">
                    <div class="txt">
                         <div class="nomc">
                <p><span> Nom:</span><a href="animal.php?titre=<?= url_custom_encode($t['sujet']) ?>&id=<?= $t['animal_base_id'] ?>"><?= $t['sujet'] ?></a></p>
           
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
                           <!-- <div class="s"> -->
                <button class="s"><a href="php/supp_article.php?id=<?=$t['animal_base_id']?>">suprimer</a></button>
                
                                <!-- </div> -->
                         <!-- <div class="m"> -->
              <button class="m"><a href="modifier_animal.php?edit=<?=$t['animal_base_id']?>"> modifier</a></button>
   
                             <!-- </div> -->
                </div>
                        </div>
                </dive>
                  <?php } ?>
               
         </dive>
       
            
         
        
</body>
</html>
