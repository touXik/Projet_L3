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