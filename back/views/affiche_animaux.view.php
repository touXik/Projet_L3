<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<table class="forum">
   <tr class="header">
   <th class="main"></th>
      <th class="main">Nom</th>
      <th class="sub-info w10">Categorie</th>
     
      <th class="sub-info w20">information</th>
      <th class="sub-info w20">Création</th>
   </tr>
   <?php while($t = $animaux->fetch()) { ?>
   <tr> 
      <td>
                <img src="espace_admin/img/<?=$t['img']?>" width="200" height="200"  >
           </td>   
      <td class="main">
         <h4><a href=""><a href="animal.php?titre=<?= url_custom_encode($t['sujet']) ?>&id=<?= $t['animal_base_id'] ?>"><?= $t['sujet'] ?></a></a></h4>
      </td>
      <td class="sub-info"><?= $t['nom'] ?></td>
     
      <td class="sub-info"><?= $t['contenu'] ?></td>
      <td class="sub-info"><?= $t['date_heure_creation'] ?></td>
      
      <td class="sub-info"><button> <a href="adopte.php?id=<?=$t['animal_base_id']?>" class="btn">adopte</a></button></td>
   </tr>

   <?php } ?>
</table>
