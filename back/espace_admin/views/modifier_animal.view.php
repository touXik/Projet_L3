
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../CSS/admin/stylescnx.css">
    <link rel="icon" type="images/png" href="../../../images/log2.jpeg">
    <title>admin-modifier</title>
</head>
<body>

    

    <!-- <button><a href="../index.php">acuilleeee</a></button>
            <button><a href="chiens.php">chiens</a></button> -->

    <form action="" method="POST" enctype="multipart/form-data">
     <h1>modifier </h1>
     

          


              <div class="input-form">
                       <input type="text" name="sujet"   placeholder=" " required value=" <?=$edit_animaux['sujet'] ?>"  ><br>
                       <label for="sujet">sujet</label>
             </div>


               <div class="input-form">
                          <input type="text" name="contenu"  placeholder=" " required value="<?= $edit_animaux['contenu']?>"><br>
                          <label for="contenu">contenu</label>
              </div>


                  


                        <div class="submit-form">
                            <button type="submit" name="submit">MODIFIER</button>
                         </div>

    </form>

 
</body>
</html>