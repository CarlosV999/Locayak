<?php
require_once "dao/kayakDAO.php";
$listeKayak = kayakDAO::listeKayak();

?>

<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LoCayak</title>
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/page-liste-admin.css">
    </head>
    
    <body>
        <div class="header">
            <h1>LoCayak</h1>
            <ul>
                <li><a href="#">Acceuil</a></li>
                <li><a href="#">Location</a></li>
                <li><a href="#">Membre</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Messagerie</a></li>
            </ul>
        </div>
        
        <div class="liste-kayak">
            <button class="boutonAjouter"
                    type="button">
                    Ajouter
            </button>

            <?php
            foreach ($listeKayak as $kayak) {
            ?>
            
            <div class="kayak">
                    
                <a href=""><h3 class="nom" href ="kayak.php?id=<?= $kayak['id'] ?>"><?= $kayak['titreAnnonce']; ?><a title="" ></a></h3></a>
                
                <div class="image" ><img src="images/<?= $kayak['image'];?>" /></div>
                
                <p class="descriptionAnnonce">description annonce</p>
                
                <div class="renseignementLieu" href ="kayak.php?id=<?= $kayak['id'] ?>"><?= $kayak['adresse']; ?></div>
                
                <div class="renseignementPropriétaire">renseignement propriétaire</div>

                <div class="type" href="kayak.php?id=<?= $kayak['id'] ?>"><?= $kayak['type']; ?></div>
                
                <button class="boutonModifier"
                    type="button">
                    Modifier
                </button>
            
                <button class="boutonSupprimer"
                    type="button">
                    Supprimer
                </button>

            </div>
        </div>
        <?php
        }
        ?>
    </body>
</html>