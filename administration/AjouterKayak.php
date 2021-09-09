<?php
require_once "../dao/kayakDAO.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Ajouter votre Kayak</title>
</head>

<body>
<div class="container">
    <form action="traitement_ajouter_kayak.php" method="post" enctype="multipart/form-data">
    <h3>Votre Kayak</h3>
    <h4>Entre les information de votre Kayak</h4>
    <fieldset>
      <label for="titre">Titre de votre annonce</label>
      <input placeholder="Titre" id="titre" name="titre" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <label for="adresse">Votre adresse</label>
      <input placeholder="Adresse" id="adresse" name="adresse" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <label for="taille">Taille du Kayak</label></br>
      <input type="radio" id="taille" name="taille" value="Petit"> Petit<br>
      <input type="radio" id="taille" name="taille" value="Moyen"> Moyen<br>
      <input type="radio" id="taille" name="taille" value="Grand"> Moyen
    </fieldset>
    <fieldset>
      <label for="cout">Cout de la location</label>
      <input placeholder="Cout" id="cout" name="cout" type="number" min="0" step="any" tabindex="3" required>
    </fieldset>
    <fieldset>
      <label for="illustration">Illustration</label></br>
      <input type="file" id="illustration" name="illustration" required>
    </fieldset>
    <fieldset>
      <button type="submit" id="envoyer-ajout">Terminer</button>
    </fieldset>
  </form>
</body>

</html>