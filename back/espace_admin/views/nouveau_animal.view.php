<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<form class="fntopic" method="POST" enctype="multipart/form-data">
     <table class="forum nanimal">
      <tr class="header">
         <th class="main">Nouveau Animal</th>
         <th></th>
      </tr>
      <tr>
         <td>Nom</td>
         <td><input type="text" name="tsujet" size="70" maxlength="70" /></td>
      </tr>
      <tr>
         <td>Catégorie</td>
         <td>
         <?= $categorie ?>
         </td>
      </tr>
      <tr>
         <td>Sous-Catégorie</td>
         <td>
            <select name="souscategorie">
               <?php while($sc = $souscategories->fetch()) { ?>
               <option value="<?= $sc['id'] ?>"><?= $sc['nom'] ?></option>
               <?php } ?>
            </select>
         </td>
      </tr>
      <tr>
         <td>
                <input type="file" name="img">importer image </input>
        </td>
      </tr>
      <tr>
         <td>information</td>
         <td><textarea name="tcontenu"></textarea></td>
      </tr>
     
      <tr>
         <td colspan="2"><input type="submit" name="tsubmit" value="Poster l'animal" /></td>
      </tr>
      <?php if(isset($terror)) { ?>
      <tr>
         <td colspan="2"><?= $terror ?></td>
      </tr>
      <?php } ?>
   </table>
</form>