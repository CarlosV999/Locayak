<?php
require_once "../dao/KayakDAO.php";
//Remplacer pour l'id recuperer de la session
$listeKayak = KayakDAO::listeKayakPourMembre(1);
  include_once "../administration/header-admin.php";
?>
<link rel="stylesheet" href="../css/membre.css?<?php echo time(); ?>">

<section>
  <div id="zone-membre-global">
    <div id="zone-membre-info">
      <img src="../images/DefaultProfile.png" alt="Votre image de profile" id="image-profile">
      <div id="zone-membre-text">
        <p class="nom">Jean Hugg</p>
        <p>Description : Bonjours je m'appel Jean Hugg mais tout le monde m'appele Hulk, pourquoi ? Meme si je vous le disait vous me croyerais pas. Du coup mes Kayak . Alors il sont grand beau et fort mais il aime pas sortire le dimanche et faut pas les nourrir aprés minuit</p>
        <p>Région: Bas Saint Laurent</p>
        <p>Ma note : 8/10 </p>
      </div>
    </div>
    <p class="nom">Mes Kayaks</p>
    <div class="mes-kayak">
    <?php
            foreach ($listeKayak as $kayak) {
                //membreDAO::listeMembre();
                //$idMembre = $kayak["idMembre"];
                //print_r($listeMembre);
            ?>
    <div class="card-page-membre" style="width: 22rem;">
        <img class="card-img-top-membre" src="../images/<?= $kayak['image'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $kayak['titreAnnonce']; ?></h5>
            <p class="card-text"><?= $kayak["descriptionAnnonce"];?></p>
            <a href="../Annonce.php?id=<?php echo $kayak['id']; ?>" class="btn btn-primary2-membre">Détail</a>
        </div>
    </div>
<?php
        }
        ?>
  </div>
  </div>

</section>
</br>

<?php
       include_once "../administration/footer-admin.php";
       ?>

</body>

</html>