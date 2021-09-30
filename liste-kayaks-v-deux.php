<?php

require_once "dao/KayakDAO.php";
$listeKayak = KayakDAO::listeKayak();

require_once "header.php";
?>

<div class="barre-recherche">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" placeholder="Votre recherche" />
  </div>
  <button type="button" class="btn btn-primary">
    <i>Recherche</i>
  </button>
</div>
</br>
</br>

<div class="liste-kayak">
    

    <?php
            foreach ($listeKayak as $kayak) {
                //membreDAO::listeMembre();
                //$idMembre = $kayak["idMembre"];
                //print_r($listeMembre);
            ?>
    <div class="card" style="width: 22rem;">
        <img class="card-img-top" src="images/<?= $kayak['image'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $kayak['titreAnnonce']; ?></h5>
            <p class="card-text"><?= $kayak["descriptionAnnonce"];?></p>
            <a href="Annonce.php?id=<?php echo $kayak['id']; ?>" class="btn btn-primary2">Cliquer pour plus de détail</a>
        </div>
    </div>
<?php
        }
 ?>
    </div>
    <?php
      include_once "footer.php";
 ?>

</body>


</html>