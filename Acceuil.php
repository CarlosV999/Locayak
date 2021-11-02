<?php
require_once "configuration.php";
  include_once "header.php";
require_once "dao/LocationDAO.php";
require_once "dao/KayakDAO.php";
require_once "dao/MembreDAO.php";

//Remplacer pour l'id recuperer de la session
$email = $_SESSION['membreEmail'];
$id = $_SESSION["idMembre"];

$listeKayak = KayakDAO::listeKayakPourMembre($id);
$membre = MembreDAO::recupererMembre($email);
?>
      <section>
        <div class="zone-bienvenue">
          <p class="message-bienvenue">
            Bonjour et bienvenue chez Locayak, le site où vous pouvez
            louer un kayak, ou mettre votre kayak en location !
          </p>
        </div>
      </section>
      <p class="nom">Mes Kayaks</p>
    <div class="mes-kayak">
    
    <?php
            foreach ($listeKayak as $kayak) {
                //membreDAO::listeMembre();
                //$idMembre = $kayak["idMembre"];
                //print_r($listeMembre);
            ?>
    
    <div class="card-page-membre" style="width: 22rem;">
        <img class="card-img-top-membre" src="images/<?= $kayak['image'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $kayak['titreAnnonce']; ?></h5>
            <p class="card-text"><?= $kayak["descriptionAnnonce"];?></p>
            <a href="Annonce.php?id=<?php echo $kayak['id']; ?>" class="btn btn-primary2-membre">Détail</a>
        </div>
    </div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br
></br>

      <?php
       include_once "footer.php";
       ?>     

 </body>
</html>