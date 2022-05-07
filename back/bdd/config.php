<?php
          define('HOST', 'localhost');
          define('DB_NAME', 'swettails');
          define('USER', 'root');          
          define('PASS', '');

try{
     $bdd = new PDO("mysql:host=" . HOST .";dbname=" . DB_NAME, USER, PASS); 
   
     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "connecter ok";
} catch (PDOExeption $e){
	echo $e;

}

?>
<?php

   $connection = mysqli_connect(HOST,USER,PASS,DB_NAME);
   if($connection){
       return $connection;
   }else{
       echo "Connect problem".mysqli_connect_error();
   }

?>
