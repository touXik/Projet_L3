<?php

  include '../../bdd/config.php';
  $contact=$bdd -> query('SELECT * FROM contact ORDER BY date_pub DESC');

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../CSS/admin/message.css">
  <link rel="icon" type="images/png" href="../../../images/log2.jpeg">
  <title>admin-messages</title>
</head>
<body>

               <div class="menu">
                    <button ><a href="../php/logout.php"> DECONEXION</a></button>
                     <button ><a href="../index.php"> acuille</a></button>
              </div>

       <div class="messages">

                  <div class="title">
                        <h1>message reçu</h1>
                    </div>

                    <div class="txt">
          
                              <?php while($m=$contact->fetch()){ ?>
                                    <div class="ms">
                                            <div class="info">
                                                   <p><span> NOM : </span><?= $m['Nom']?></a></p>
                                                   <p><span>  Email : </span><?= $m['email']?></p>
                                                   <p><span> Sujet : </span><?= $m['sujet']?></p>
                                                   <p><span> Message : </span><?= $m['message_pub']?></p>
                                             </div>

                                             <div class="button">
                                                   <button class="s"><a href="../php/supp_message.php?id=<?=$m['id']?>">suprimer</a> </button>
                                              </div>
                                      </div>
                                <?php } ?>
         
                   </div>
          
        </dive>  
         
</body>
</html>

