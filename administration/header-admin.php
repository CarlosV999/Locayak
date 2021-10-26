
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acceuil</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css?<?php echo time(); ?>" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/menu.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/liste-kayak-admin.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/page-liste.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/stylesheet.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/page-.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/membre.css?<?php echo time(); ?>">

</head>

<body>
    <div class="header">
        <h1><a class="logo" href="../Acceuil.php">LoCayak</a></h1>
      </div>
    <a  class="hamburger" href="javascript:void(0);" class="icon" onclick="ouvrirLeMenu()">
      <i class="fa fa-bars"></i>
    </a>


    <ul id = "mesLiens">
      <li><a href="../Acceuil.php">Acceuil</a></li>
      <li><a href="../liste-kayaks-v-deux.php">En Location</a></li>
      <?php
          if(isset($_SESSION["idMembre"]))
          {
            echo "<li><a href='../membre/membre.php'>Membre</a></li>";
            echo "<li><a href='../membre/traitement-deconnection.php'>Déconnection</a></li>";
          }
          else
          {
            echo "<li><a href='../membre/formulaire-authentification.php'>Identifier vous</a></li>";
            echo "<li><a href='../membre/inscription.php'>Pas de compte? Inscriver vous</a></li>";
          }
      ?>
      <li><a href="../Projet.php">A propos</a></li>
      <li><a href="#">Messagerie</a></li>
    </ul> 
  <script src="../scripts/menu.js"></script>
  
</body>
