
<link rel="stylesheet" href="../CSS/mssalrt.css">

<?php session_start(); 

?>

<?php

if(isset($_SESSION['lastname']) && isset($_SESSION['firstname']) && isset($_SESSION['email']) &&   isset($_SESSION['date'])){
    
     

}else{
   
 
}



if (isset($_POST['submit'])){
    extract($_POST);
  



     if ( !empty($email) && !empty($password)){


        include 'bdd/config.php';
        global $bdd;
        $q = $bdd->prepare("SELECT * FROM user WHERE email = :email");
        $q->execute(['email'=> $email]);
        $result = $q-> fetch();

        if($result == true)
        {
            if(password_verify($password, $result['password'])){
                $_SESSION['email']= $email;
             header('Location:../index_adopteur.php');

      ?>

<?php


                

            }else {
             
                  include '../html/login.html'; 
                  include '../html/alrt/alrt1.html';

            }

        }else {
           
            include '../html/login.html'; 
            include '../html/alrt/alrt3.html';


        }
      


        
            
        } else { echo " <h2> veuiller complete l'ensemble des champs </h2> ";
                ?>


<?php

    }

 }

?>
<script src="../js/alrt.js"></script>

