






<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
<link rel="stylesheet" href="../css/mssalrt.css">

<!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->


<?php

       session_start();
if(!$_SESSION['email']) {
  header('Location:../html/login.html');
}
include 'bdd/config.php';

$get_email=$_SESSION['email'];
$contact=$bdd -> query('SELECT * FROM contact ORDER BY date_pub DESC');
$user= $bdd -> prepare('SELECT lastname FROM user WHERE email=?');
$user->execute(array($get_email));
 $user=$user->fetch()['lastname'];




// !empty($_POST['Nom']) AND !empty($_POST['email']) AND

           if(isset($_POST['submit'])){
   if(!empty($_POST['sujet']) AND !empty($_POST['message_pub']) ){
            //   $Nom=htmlspecialchars($_POST['Nom']);
            //   $email=htmlspecialchars($_POST['email']);
              $sujet=htmlspecialchars($_POST['sujet']);
              $message_pub=nl2br(htmlspecialchars($_POST['message_pub']));



        $ins= $bdd-> prepare('INSERT INTO contact (Nom,email,sujet,message_pub) VALUES(? , ? , ?,?)');
        $ins-> execute (array($user,$get_email,$sujet,$message_pub));






            include '../html/contactad.html';
            include '../html/alrt/alrt0.html';



   }else{
       echo'<h1>vuiller completer tout les champs</h1>';

   }
}

require('views/contactad.view.php');


?>
<script src="../js/alrt.js"></script>