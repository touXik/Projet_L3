
<!DOCTYPE html>
<html lang="en">
<head>
  
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/admin/animal.view.css">
   <title>admin-<?= $animal['sujet']?></title>
</head>
<body>
  

     <div class="section">
      <div class="sujet">
    <h1><?= $animal['sujet'] ?></h1>
</div>
   <div class="image">
   <img src="img/<?=$images['img']?>"   >
        </div>
   
        <div class="info">
     <?= $animal['contenu'] ?>
        </div>

   </div>

</body>
</html>









