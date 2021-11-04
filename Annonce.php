<?php
require_once "configuration.php";
require_once CHEMIN_DAO."KayakDAO.php";
require_once CHEMIN_DAO."MembreDAO.php";
require_once "header.php";
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
if(isset($_SESSION['idMembre']))
{
  $membrePresent = $_SESSION['idMembre'];
  /*print_r($membrePresent);
  print_r("::______::");
  print_r($_SESSION['membreEmail']);
  print_r("::______::");
  */
}

//$email = ;
$kayak = KayakDAO::selectionnerKayak($id);
$membre = MembreDAO::recupererMembre($kayak['idMembre']);
//print_r($_GET);
//print_r($kayak['idMembre']);
?>

<title>Annonce</title>

  <div class="kayak">
        
      <h1 class="info-titre" href ="kayak.php?id=<?= $kayak['id'] ?>"><?= $kayak['titreAnnonce']; ?><a title="" ></a></h1>
      <img class= "image" src="images/<?= $kayak['image'];?>" />
      <div class="info-kayak"><?= $kayak["descriptionAnnonce"];?></div>
      <div class="info-kayak" href =>Propriétaire : <?php echo $membre['prenom'] ?> <?php echo $membre['nom'] ?></div>
      <div class="info-kayak" href=>Cote propriétaire : <?php echo $membre['cote'] ?>/10</div>
      <div class="info-kayak" href =>Prix/jours :<?php echo $kayak['cout'] ?>$/jours</div>
      <div class="info-kayak" href=>Vacant ? OUI </div>
      <div class="info-kayak" href=>Région : Matanie</div>
      <div class="info-kayak" href ="kayak.php?id=<?= $kayak['id'] ?>"><?= $kayak['adresse']; ?></div>
      <form action="ConfirmationAnnonce.php" method="post">
        <input type="hidden" name="idKayak" value=<?= $kayak['id'] ?>>

        <div class="choix-kayak" >
            <?php 
                if(isset($_SESSION['idMembre']))
                {
                  if($membrePresent == $kayak['idMembre'])
                  {
                    ?>
                        <a href="modifier-kayak.php"  class="btn btn-secondary center">Modifier Ce Kayak</a>
                        <a href="supprimer-kayak.php"  class="btn btn-secondary center">Supprimer Ce Kayak</a>
                      <?php 
                  }
                  else if($membrePresent != $membre['id'])
                  {
                    ?><button type="submit" id="envoyer-ajout" class="btn btn-secondary">Louer Ce Kayak</button><?php
                  }?>
            <?php
                }
            ?>
          </div>
      </form>
  </div>

<?php
    include_once "footer.php";
?>
</div>
 </body>
</html>
