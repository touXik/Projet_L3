<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/mssalrt.css">
  <link rel="stylesheet" type="text/css" href="../css/stylescnx.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="icon" type="images/png" href="../images/log2.jpeg">
<title>Adopte</title>
</head>
<body>
<div>
<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<a href="../index.php" class="logo"> <span>sweet</span>Tails </a>

<nav class="navbar">
<a href="../index_adopteur.php">accueil</a>
<!-- <a href="../../html/contactad.html">contact</a>
<a href="../affichec_adopt/chiens.php">Chiens</a> -->
</nav>


</header> 


<div class="mssg-alrt">
   <?php 
             if (isset($n) ){
                
                ?>
              
               <div class="wrapper">
        <div id="toast">
            <div class="container-1">
                <i class="fas fa-check-square"></i>
            </div>
            <div class="container-2">
                <p>Success</p>
                <p>demande envoiyer</p>
            </div>
            <button id="close" onclick="closeToast()">
                &times;
            </button>
        </div>
    </div>
    
   
    <script src="../js/alrt.js"></script>
    <?php
                 
               
             }
      ?>
</div>

<div class="form-container">
    

  <form action="" method="POST" enctype="multipart/form-data">
          
       <h5 class="boxn">nom : <?= $user ?></h5>
       <h5 class="boxn">prenom : <?= $prenom ?></h5>
       <h5 class="boxn">email : <?= $get_email ?></h5>

   <h1>vuiller saisire info</h1>
    
   <!-- <input type="text" name="noma" placeholder="nom" class="box" ><br>
   <input type="text" name="prenom" placeholder="prénom " class="box" ><br>
   <input type="text" name="email"placeholder=" email " class="box" ><br> -->
   <input type="text" name="adress"placeholder=" adress" class="box" ><br>
   <textarea name="demande" placeholder="message" class="box" ></textarea> <br>
   
   <input type="submit" name="submit"placeholder="confirmer" class="btn">
  </form>
</div>
    
<footer id="footer" class="footer"> 
  <span class="copyrights">&copy; 2022 - Sweet tails</span>
  <a href="../html/condition.html" class="conditions">Condition générales d'adoption</a>
</footer>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>
