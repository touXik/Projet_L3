<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../CSS/admin/message.css">
  <link rel="icon" type="images/png" href="../../../images/log2.jpeg">
  <title>admin-Demande dadoption </title>
</head>
<body>
                     <div class="menu">
                           <button ><a href="php/logout.php"> DECONEXION</a></button>
                           <button><a href="index.php"> acuille</a></button>
                    </div>
  
  
     
                      
    <div class="messages">
           <div class="messaget">
                    <div class="title">
                           <h1>demande </h1>
                      </div>
              
            
               <div class="txt">
                      <?php while($a=$demande->fetch()){ ?>
                        <div class="ms">
                                            <div class="info">
                                <h4><span>demande du : </span><?= $a['date_env']?> </h4>
                              <p><span> Nom & prénom : </span><?= $a['nom']?> <?= $a['prenom']?> </p>
              
                              <p><span>emil : </span><?= $a['email']?></p>
                              <p><span>adresse : </span><?= $a['adress']?></p>
                              <p><span>demande : </span><?= $a['demande']?></p>
                              <p><span>chiens demander --> </span><a class="d" href="animal.php?titre=<?= $a['nom_animal']?>&id=<?=$a['id_animal']?>"><?= $a['nom_animal']?></a></p>
                      </div>
                      <div class="button">
                              <button class="s"><a href="php/supp_article.php?id=<?=$a['id']?>">suprimer</a> </button>
                      </div>
                      </div>
                      <?php } ?>
                    <!-- </div> -->
              </div> 

              </div>
        
     </dive> 
        
</body>
</html>
