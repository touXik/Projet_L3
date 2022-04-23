
<?php


session_start();
if(!$_SESSION['email']) {
  header('Location:../html/login.html');
}
$get_email=$_SESSION['email'];

 include 'bdd/config.php';
  $animaux=$bdd -> query('SELECT * FROM f_animaux ORDER BY date_heure_creation DESC');
  $user= $bdd -> prepare('SELECT lastname FROM user WHERE email=?');
  $user->execute(array($get_email));
   $user=$user->fetch()['lastname'];
   $prenom= $bdd -> prepare('SELECT firstname FROM user WHERE email=?');
   $prenom->execute(array($get_email));
   $prenom=$prenom->fetch()['firstname'];

  // if($user->rowCount()==1){
  
   
    // $prenom_u=$user['lastname'];
    // $nom_u=$user['firstname'];
    // $email_u=$user['email'];
   
  // }
 


//    if(!$_SESSION['password']) {
//        header('Location: ../index.html');
//    }

        
// !empty($_POST['noma']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND

             if(isset($_POST['submit'])){
     if( !empty($_POST['adress']) AND  !empty($_POST['demande']) ){
                   $get_id=htmlspecialchars($_GET['id']);
                  $animaux= $bdd -> prepare('SELECT * FROM f_animaux WHERE id=?');
                  $animaux->execute(array($get_id));
                  if($animaux->rowCount()==1){
  
                    $animaux=$animaux->fetch();
                    $id_animal=$animaux['id'];
                    $nom_animal=$animaux['sujet'];
                    // $categorie_c=$animaux['categorie'];
                    // $info_c=$animaux['info'];
                  }else{
                      die('cet article nexistepas');
                  }
                $nom=$user;
                $prenom=$prenom;
                $email=$get_email;
                $adress=nl2br(htmlspecialchars($_POST['adress']));
                $demande=htmlspecialchars($_POST['demande']);
               
               
               
                       
          $ins= $bdd-> prepare('INSERT INTO demande (nom,prenom,email,adress,demande,id_animal,nom_animal) VALUES(? , ? , ?, ?, ?,?,?)');
          $ins-> execute (array($nom, $prenom, $email, $adress, $demande,$id_animal,$nom_animal));
        
      
                  $n=1;
        
       

     }else{
         echo'<h1>vuiller compliter tout les champs</h1>';

     }
}

require('views/adopte.view.php');
?>


