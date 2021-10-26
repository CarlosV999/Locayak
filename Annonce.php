<?php
require_once "configuration.php";
require_once CHEMIN_DAO."KayakDAO.php";
require_once CHEMIN_DAO."MembreDAO.php";
require_once "header.php";
$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
//$email = ;
$kayak = KayakDAO::selectionnerKayak($id);
$membre = MembreDAO::recupererMembre($kayak['idMembre']);
//print_r($membre);
//print_r($kayak);
?>

<title>Annonce</title>

  <div class="kayak">
        
    <h1 class="nom" href ="kayak.php?id=<?= $kayak['id'] ?>"><?= $kayak['titreAnnonce']; ?><a title="" ></a></h1>
    <img class= "image" src="images/<?= $kayak['image'];?>" />
    <div class="description"><?= $kayak["descriptionAnnonce"];?></div>
    <div class="proprietaire" href =>Propriétaire : <?php echo $membre['prenom'] ?> <?php echo $membre['nom'] ?></div>
    <div class="cote" href=>Cote propriétaire : <?php echo $membre['cote'] ?>/10</div>
    <div class="prix" href =>Prix/jours :<?php echo $kayak['cout'] ?>$/jours</div>
    <div class="vacant" href=>Vacant ? OUI </div>
    <div class="region" href=>Région : Matanie</div>
    <div class="renseignement" href ="kayak.php?id=<?= $kayak['id'] ?>"><?= $kayak['adresse']; ?></div>
    <form action="ConfirmationAnnonce.php" method="post">
      <input type="hidden" name="idKayak" value=<?= $kayak['id'] ?>>

    </form>

    </div>
  </div>
<div>
<?php
    include_once "footer.php";
?>
</div>
 </body>
</html>
