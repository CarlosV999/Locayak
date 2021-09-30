<?php
require_once "dao/KayakDAO.php";
require_once "header.php";
?>

<title>Inscription</title>
<div class="formulaireInscription">
<form action="traitement_ajouter_membre.php">
  <label for="nom">Nom*:</label><br>
  <input type="text" id="nom" name="nom" placeholder="Nom" required><br>
  
  <label for="prenom">Prénom*:</label><br>
  <input type="text" id="prenom" name="prenom" placeholder="Prénom" required><br><br>
  
  <label for="mail">E-mail*:</label><br>
  <input type="email" id="mail" name="mail" placeholder="exemple@gmail.com" required><br><br>
  
  <label for="motDePasse">Mot de passe*:</label><br>
  <input type="password" id="motDePasse" name="motDePasse" placeholder="mot de passe" required><br><br>
  
  <label for="confirmationMDP">Confirmez mot de passe*:</label><br>
  <input type="password" id="prenom" name="confirmationMDP" placeholder="mot de passe" required><br><br>

  <label for="telephone">Numéro de téléphone:</label><br>
  <input type="tel" id="telephone" name="telephone" placeholder="1 123 456-7898" pattern="[0-9]{1} [0-9]{3} [0-9]{3}-[0-9]{4}"><br>
  <small>Format: 1 123 456-7898 </small><br><br>

  <label for="typeMembre">Type de membre*:</label><br>
  <input type="radio" id="typeMembreLocateur" name="typeMembre" value="1" required>
  <label for="locateur">Locateur</label><br>
  <input type="radio" id="typeMembreLocataire" name="typeMembre" value="0" required>
  <label for="locataire">Locataire</label><br>
  <input type="submit" value="Inscription">
</form> 
</div>

<?php
    include_once "footer.php";
?>
</body>
</html>