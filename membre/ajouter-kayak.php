<?php
require_once "../configuration.php";
require_once CHEMIN_DAO."KayakDAO.php";
require_once "../administration/header-admin.php";
    $dateActuel= date("Y-m-d");
    $maxChoix = date('Y-m-d', strtotime('+2 month'));
    $maxChoixDebut = date('Y-m-d', strtotime('+1 month'));
    $finMin = date('Y-m-d', strtotime('+2 day'));

?>
<link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
<script src="../scripts/jquery-3.6.0.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="../scripts/dates.js?<?php echo time(); ?>"></script>
<title>Ajouter votre Kayak</title>
<body>
<div class="container">
    <form action="traitement-ajouter-kayak.php" method="post" enctype="multipart/form-data">
    <h3>Votre Kayak</h3>
    <h4>Entre les information de votre Kayak</h4>
    <fieldset>
      <label for="titreAnnonce"></label>
      <input placeholder="Titre de votre annonce" id="titreAnnonce" name="titreAnnonce" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <label for="descriptionAnnonce"></label>
      <textarea placeholder="Description de voter annonce" id="descriptionAnnonce" name="descriptionAnnonce" type="textarea" tabindex="1" required ></textarea>
    </fieldset>
    <fieldset>
      <label for="adresse"></label>
      <input placeholder="Votre adresse" id="adresse" name="adresse" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <label for="idMembre"></label>
      <input id="idMembre" name="idMembre" type="hidden" value=<?= $_SESSION['idMembre'] ?> tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <label for="type">Taille du Kayak</label></br>
      <input type="radio" id="type" name="type" value="Petit"> Petit<br>
      <input type="radio" id="type" name="type" value="Moyen"> Moyen<br>
      <input type="radio" id="type" name="type" value="Grand"> Grand
    </fieldset>
    <fieldset>
      <label for="cout"></label>
      <input placeholder="Coût de la location" id="cout" name="cout" type="number" min="0" step="any" tabindex="3" required>
    </fieldset>
    <fieldset>
      <label for="illustration">Illustration</label></br>
      <input type="file" id="illustration" name="illustration" required>
    </fieldset>
    
    </br>
    <fieldset>
      <p>Debut des disponibilité: <input type = "text" onblur="validerDate();" name="dateDebutDisponibiliter" id = "dateDebutDisponibiliter"></p>
      <p>Fin des disponibilité: <input type = "text" onblur="validerDate();" name="dateFinDisponibiliter" id = "dateFinDisponibiliter"></p>
      </fieldset>
      </br>
    <fieldset>
        <?php
             if(isset($_SESSION["idMembre"]))
             {
                ?><button type="submit" id="envoyer-ajout">Enregistrer le Kayak</button><?php
             }
        ?>
      
    </fieldset>
  </form>
</br>
</body> 
</html>