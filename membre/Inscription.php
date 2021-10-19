<?php
include_once "../administration/header-admin.php";
?>

<title>Inscription</title>
<div class="formulaireInscription">
<form action="membre/traitement-inscription.php" method="post">
  <label for="nom">Nom*:</label><br>
  <input type="text" id="nom" name="nom" placeholder="Nom" required ><br>
  
  <label for="prenom">Prénom*:</label><br>
  <input type="text" id="prenom" name="prenom" placeholder="Prénom" required ><br><br>
  
  <label for="mail">E-mail*:</label><br>
  <input type="email" id="mail" name="mail" placeholder="exemple@gmail.com" required ><br><br>
  
  <label for="motDePasse">Mot de passe*:</label><br>
  <input type="password" id="motDePasse" name="motDePasse" placeholder="mot de passe" required><br><br>
  
  <label for="confirmationMDP">Confirmez mot de passe*:</label><br>
  <input type="password" id="confirmationMDP" name="confirmationMDP" placeholder="mot de passe" required><br><br>

  <label for="telephone">Numéro de téléphone:</label><br>
  <input type="tel" id="telephone" name="telephone" placeholder="1 123 456-7898"><br>

  <label for="adresse">Adresse*:</label><br>
  <input type="text" id="adresse" name="adresse" placeholder="adresse" required ><br><br>

  <input type="submit" value="Inscription">
</form> 
</div>

<?php
    include_once "../administration/header-admin.php";
?>
</body>
</html>