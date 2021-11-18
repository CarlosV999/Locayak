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


      <section>
      <script type="text/javascript" src="lib/Ajax.js"></script>
      <script type="text/javascript" src="scripts/carrousel.js"></script>
      <button id="ajaxButton" type="button">Faire une requête</button>

      

      <?php
       include_once "footer.php";
       ?>     

 </body>
</html>