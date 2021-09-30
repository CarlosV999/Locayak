<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Acceuil</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/menu.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/liste-kayak-admin.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/page-liste.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/stylesheet.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/page-.css?<?php echo time(); ?>">
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
      <li><a href="#">Membre</a></li>
      <li><a href="../Projet.php">A propos</a></li>
      <li><a href="#">Messagerie</a></li>
    </ul> 
  <script src="../scripts/menu.js"></script>
  
</body>
