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

//<script type="text/javascript" src="scripts/carrousel.js"></script> 
//<button id="ajaxButton" type="button">Faire une requête</button>
?>


      <section>

      <label>Vore nom :
      <input type="text" id="ajaxTextbox" />
      </label>
      <span id="ajaxButton">
         Lancer une requête
      </span>
      

      <script>
(function() {
  var httpRequest;
  document.getElementById("ajaxButton").onclick = function() {
      var userName = document.getElementById("ajaxTextbox").value;
      makeRequest('test2.php', userName);
  };
  function makeRequest(url, userName) {
    httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
      alert('Abandon :( Impossible de créer une instance de XMLHTTP');
      return false;
    }
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('POST', url);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send('userName=' + encodeURIComponent(userName));
  }

  function alertContents() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {
        alert(httpRequest.responseText);
      } else {
        alert('Il y a eu un problème avec la requête.');
      }
    }
  }
})();
</script>

      <?php
       include_once "footer.php";
       ?>     

 </body>
</html>