<?php
require_once "configuration.php";
//require_once CHEMIN_DAO."LocationDAO.php";
//require_once CHEMIN_DAO."KayakDAO.php";
//require_once CHEMIN_DAO."MembreDAO.php";
include_once "header.php";
//Remplacer pour l'id recuperer de la session
/*
$email = $_SESSION['membreEmail'];
$id = $_SESSION["idMembre"];

$listeKayak = KayakDAO::listeKayakPourMembre($id);
$membre = MembreDAO::recupererMembre($email);
*/
//include "poc/traduction/config.php";
?>

<noscript id="images-liste"></noscript>
      <section>
        <div class="zone-bienvenue">
          <p class="message-bienvenue">
           <?= _('Bonjour et bienvenue chez Locayak, le site où vous pouvez louer un kayak, ou mettre votre kayak en location !') ?>
          </p>
        </div>
      </section>

  <div class="imagePresent">
  <a id="ajaxButton"><img id="ajaxImage" src="images/KayakStylé.png"></a>
  </div>

  <script src="scripts/carrousel.js"></script>
      <?php
       include_once "footer.php";
       ?>     

 </body>
</html>