   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <div class="menu">
      
      <button><a class="bt" href="views/messages.view.php">Boit reception</a></button>
       <button><a class="bt" href="afficher_demande.php">Demande d'adoption</a></button> 
       <button ><a class="bt" href="php/logout.php"> Déconnexion</a></button>
   
 </div>
<table class="forum">
   <tr class="header">
   
      <th class="main">Catégories</th>
 
   </tr>
   <?php
  require('php/functions.php');
   while($c = $categories->fetch()) {
      $subcat->execute(array($c['id']));
      $souscategories = '';
      while($sc = $subcat->fetch()) {
         $souscategories .= '<a href="forum_animaux.php?categorie='.url_custom_encode($c['nom']).'&souscategorie='.url_custom_encode($sc['nom']).'">'.$sc['nom'].'</a> | ';
      }
      $souscategories = substr($souscategories, 0, -3);
   ?>
   <tr>
      <td class="main">
         <h1><a href="forum_animaux.php?categorie=<?= url_custom_encode($c['nom']) ?>"><?= $c['nom'] ?></a></h1>
         <p>
         <?= $souscategories ?>
         </p>
      </td>
 
   </tr>
   <?php } ?>
</table>
