


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/admin/stylescnx.css">
    <link rel="icon" type="images/png" href="../../images/log2.jpeg">
    <title>admin-formajout</title>
</head>
<body>
<div>
            <button><a href="index.php">accueil</a></button>
            <button><a href="forum_animaux.php?categorie=<?= url_custom_encode($get_categorie) ?>"><?=$name_cat?></a></button>
     
    <form action="" method="POST" enctype="multipart/form-data">
     <h1>ajouter <?=$name_cat?></h1>
     

          


              <div class="input-form">
                       <input type="text" name="tsujet"  id="password" placeholder=" " required><br>
                       <label for="nom">Nom</label>
             </div>
                    
                       <h4> categorie : <?= $categorie ?></h4>
        
                     <div class="input-form">

              <select name="souscategorie">
               <?php while($sc = $souscategories->fetch()) { ?>
               <option value="<?= $sc['id'] ?>"><?= $sc['nom'] ?></option>
               <?php } ?>
            </select>
            </div>
                   <div class="submit-form">
                       <input type="file" name="img">importer image </input> <br>
                   </div>
                  <h4>information</h4>

                <div class="input-form">
                           
                         <textarea name="tcontenu" placeholder="information " required  ></textarea> <br>
                         
                 </div>


                        <div class="submit-form">
                            <button type="submit" name="tsubmit">AJOUTER</button>
                         </div>

    </form>


 </div>
</body>
</html>



