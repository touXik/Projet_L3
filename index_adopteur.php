<?php
  session_start();
  if(! $_SESSION['email']  ) {
      header('Location:html/login.html');
  }
 
  require('back/bdd/config.php'); /* Contient la connexion à la $bdd */
  $categories = $bdd->query('SELECT * FROM f_categories ORDER BY nom');
  $subcat = $bdd->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ? ORDER BY nom');
 
?>
 <?php
            //  include("back/systeme_notifications/connection/DB.php");
       $find_notifications = "Select * from inf where active = 1";
       $result = mysqli_query($connection,$find_notifications);
       $count_active = '';
       $notifications_data = array(); 
       $deactive_notifications_dump = array();
        while($rows = mysqli_fetch_assoc($result)){
                $count_active = mysqli_num_rows($result);
                $notifications_data[] = array(
                            "n_id" => $rows['n_id'],
                            "notifications_name"=>$rows['notifications_name'],
                            "message"=>$rows['message']
                );
        }
        //only five specific posts
        $deactive_notifications = "Select * from inf where active = 0 ORDER BY n_id DESC LIMIT 0,5";
        $result = mysqli_query($connection,$deactive_notifications);
        while($rows = mysqli_fetch_assoc($result)){
          $deactive_notifications_dump[] = array(
                      "n_id" => $rows['n_id'],
                      "notifications_name"=>$rows['notifications_name'],
                      "message"=>$rows['message']
          );
        }

     ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" type="images/png" href="images/log2.jpeg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
 
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

       <!-- --------------------------------------------------- -->
  
   
  
    
    <link rel="stylesheet" type="text/css" href="back/systeme_notifications/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="back/systeme_notifications/assets/stl_not.css"/>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> -->
    <script src="back/systeme_notifications/assets/js/jquery.min.js"></script>
    <script src="back/systeme_notifications/assets/js/bootstrap.min.js"></script>
    <script src="back/systeme_notifications/assets/dyn_not.js"></script>



        <!-- --------------------------------------------------- -->
    <title>Sweet-tails</title>


</head>

<body>
<!--- header  --->
 <header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>sweet</span>Tails </a>

        <nav class="navbar">
            <a href="#">accueil</a>
            <a href="#a-propos">à propos</a>
            <a href="#services">services</a>
            <a href="back/contactad.php">contact</a>
            <a href="back/logout.php">deconnexion</a>
            
           
        <!-- <nav class="navbar navbar-inverse"> -->
                <!-- <div class="container-fluid"> -->
            
        </nav>
        <div class="notif">
                  <ul class="nav navbar-nav navbar-right">
                    <li><i class="fa fa-bell"   id="over" data-value ="<?php echo $count_active;?>"></i></li>
                    <?php if(!empty($count_active)){?>
                    <div class="round" id="bell-count" data-value ="<?php echo $count_active;?>"><span><?php echo $count_active; ?></span></div>
                    <?php }?>
                     
                    <?php if(!empty($count_active)){?>
                      <div id="list">
                       <?php
                          foreach($notifications_data as $list_rows){?>
                            <li id="message_items">
                            <div class="message alert alert-warning" data-id=<?php echo $list_rows['n_id'];?>>
                              <span><?php echo $list_rows['notifications_name'];?></span>
                              <div class="msg">
                                <p><?php 
                                  echo $list_rows['message'];
                                ?></p>
                              </div>
                            </div>
                            </li>
                         <?php }
                       ?> 
                       </div> 
                     <?php }else{?>
                        <!--old Messages-->
                        <div id="list">
                        <?php
                          foreach($deactive_notifications_dump as $list_rows){?>
                            <li id="message_items">
                            <div class="message alert alert-danger" data-id=<?php echo $list_rows['n_id'];?>>
                              <span><?php echo $list_rows['notifications_name'];?></span>
                              <div class="msg">
                                <p><?php 
                                  echo $list_rows['message'];
                                ?></p>
                              </div>
                            </div>
                            </li>
                         <?php }
                       ?>
                        <!--old Messages-->
                     
                     <?php } ?>
                     
                     </div>
                  </ul>
                          <!-- </div> -->

            </div>
                          

    <div id="login-btn">
           
    </div>

</header> 

<!--- bg du site --->
<div class="home" id="home">
    <img data-speed="5" class="home-parallax" src="images/babash.jpg" alt="background du site">
</div>



<!--- slider vers le bas --->
<div class="landing" align="center" >
    <a href="#categories" class="delivery-link">
       
        <i class="scroll-icon fas fa-angle-down"></i> <br>
        <span class="scroll-text" data-text="Categories"></span>
    </a>
</div>

<!--- categories --->
<section class="categories" id="categories">

   
    <table class="forum">
    <!-- <tr class="header">
       <th class="main">Catégories</th>
  
    </tr> -->
    <?php
   require('back/espace_admin/php/functions.php');
    while($c = $categories->fetch()) {
       $subcat->execute(array($c['id']));
       $souscategories = '';
       while($sc = $subcat->fetch()) {
          $souscategories .= '<a href="back/affiche_animaux.php?categorie='.url_custom_encode($c['nom']).'&souscategorie='.url_custom_encode($sc['nom']).'">'.$sc['nom'].'</a> | ';
       }
       $souscategories = substr($souscategories, 0, -3);
    ?>
    <tr>
       <td class="main">
          <h1><a href="back/affiche_animaux.php?categorie=<?= url_custom_encode($c['nom']) ?>"><?= $c['nom'] ?></a></h1>
          <p>
          <?= $souscategories ?>
          </p>
       </td>
  
    </tr>
    <?php } ?>
 </table>

</section>

<!--- sevices  --->

<section class="services" id="services">

    <h1 class="heading">nos <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-bone"></i>
            <h3>fournitures animaux</h3>
            <p>tous types de nourriture pour les animaux du refuge.</p>
          
        </div>


        <div class="box">
            <i class="fas fa-home"></i>
            <h3>refuges gratuits</h3>
            <p>refuges gratuits rien que pour les animaux rescués.</p>
           
        </div>

        <div class="box">
            <i class="fas fa-user-nurse"></i>
            <h3>gardes animaux</h3>
            <p>disponibilités des volontaires gardes animaux spécialites.</p>
            
        </div>
    </div>

</section>

<!--- a propos --->
<section class="a-propos" id="a-propos">
  <h1 class="heading">à <span>propos</span></h1>

  <h1 align="center" class="h1">
    Bonjour, nous espérons que ce message vous trouve en bonne santé.<br><br>
        Nous sommes une organisation qui tend à aider les animaux de compagnie sans abri,<br> Nous les récupérons et prenons soin d'eux <a href="#services">(voir nos services)</a> <br> jusqu'à ce que nous leur trouvions une bonne famille qui les adoptent.<br><br> S'il vous plait
        n'hésitez pas à <a href="html/contactad.html">nous contacter</a> ou faire un <a href="#">don</a> si possible,<br> nous vous en serons très reconnaissants. merci,<br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; à bientôt!!
       
  </h1>   
</section>

<!--- boutons partages  --->
<section  id="bouton_partage">
  <div class="share">
    <ol>
      <li><a target="-_blank" href="https://instagram.com"><i class="fab fa-instagram fa-2x"></i></a></li> 
      <li><a target="_blank" href="https://facebook.com"><i class="fab fa-facebook fa-2x"></i></a></li>
      <li><a target="_blank" href="https://twitter.com"><i class="fab fa-twitter fa-2x"></i></a></li>
    
    </ol>
    <div class="toggle"></div>
  </div>
</section>

<section  id="bouton_dons">
  <div class="share_dons">
 
    <a href="html/paiement.html"><div class="toggle_dons"></div></a>
  </div>
</section>

<!--- footer --->
<footer id="footer" class="footer"> 
  <span class="copyrights">&copy; 2022 - Sweet tails</span>
  <a href="#" class="conditions">Condition générales d'adoption</a>
</footer>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<!--- js --->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

<script type="text/javascript" src="js/js.js"></script>
<script src="https://kit.fontawesome.com/9f75563516.js" crossorigin="anonymous"></script>


<!---- ---->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>

</html> 