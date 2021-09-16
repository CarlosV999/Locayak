<?php
require_once  "basededonee.php";
require_once  "BaseDeDonnee.php";
class kayakDAO{
    public static function listeKayak()
    {
        $MESSAGE_SQL_RECUPERER = "SELECT * FROM `kayak`";
        $requeteSelectKayak = getConnexion()->prepare($MESSAGE_SQL_RECUPERER);
        $requeteSelectKayak->execute();
        return $requeteSelectKayak->fetchAll();
    }
    public static function selectionnerKayak($id)
    {
        $MESSAGE_SQL_SELECTIONER = "SELECT * FROM `kayak` WHERE id = :id";
        $requeteSelectKayak = getConnexion()->prepare($MESSAGE_SQL_SELECTIONER);
        $requeteSelectKayak->bindParam(':id', $id, PDO::PARAM_STR);
        $requeteSelectKayak->execute();
        return $requeteSelectKayak->fetchAll();
    }

    public static function ajouterKayak($informationKayak,$image)
    {
          
        $MESSAGE_SQL_AJOUTER_JEU = "INSERT INTO kayak (titreAnnonce,descriptionAnnonce,type,adresse,cout,idMembre,image) VALUES (:titreAnnonce,:descriptionAnnonce,:type, :adresse,:cout,:idMembre,'$image')";
        $requeteAjoutKayak = BaseDeDonnee::getConnexion() -> prepare($MESSAGE_SQL_AJOUTER_JEU); 

        $requeteAjoutKayak->bindParam(':titreAnnonce', $informationKayak['titreAnnonce'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':descriptionAnnonce', $informationKayak['descriptionAnnonce'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':type', $informationKayak['type'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':adresse', $informationKayak['adresse'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':cout', $informationKayak['cout'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':idMembre', $informationKayak['idMembre'], PDO::PARAM_STR);
        return $requeteAjoutKayak-> execute();
    }

    public static function supprimerKayak($idKayak){
        $MESSAGE_SQL_SUPPRIMER_KAYAK = "DELETE FROM kayak WHERE id=:id";

        $requeteSuppKayak = BaseDeDonnee::getConnexion()-> prepare($MESSAGE_SQL_SUPPRIMER_KAYAK); 
        $requeteSuppKayak-> bindParam('id',$id,PDO::PARAM_INT);
        return $requeteSuppKayak-> execute();
    }

    public static function modifierKayak($kayak){
        $image = "SELECT image FROM `jeux` WHERE id=:id";
        $requeteImage= BaseDeDonnees::getConnexion()->prepare($image);
        $requeteImage->bindParam(':id', $id, PDO::PARAM_INT);
        $requeteImage->execute();
        $imageEmplacement = $requeteImage -> fetch();

        //Suprime l'ancienne version de l'image si une image et deja presente
        if(!empty($_FILES['illustration']['name'])) {
            if(!empty($imageEmplacement['image'])){
                unlink("../illustration/".$imageEmplacement['image']."");
            }
            $repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/GamersPlace/illustration/";
            $fichierDestination = $repertoireIllustration . $_FILES['illustration']['name'];
            $fichierSource = $_FILES['illustration']['tmp_name'];
            if(move_uploaded_file($fichierSource,$fichierDestination))
            {
                echo"Image modifier \n";
            }
            $illustration =$_FILES['illustration']['name'];
            $MESSAGE_SQL_MODIFIER_JEU = "UPDATE jeux  SET titre=:titre,description=:description,studio=:studio,prix=:prix,difficulter=:difficulter,dateSortie=:dateSortie,image='$illustration' WHERE id=:id";
        }else{
            $MESSAGE_SQL_MODIFIER_JEU = "UPDATE jeux  SET titre=:titre,description=:description,studio=:studio,prix=:prix,difficulter=:difficulter,dateSortie=:dateSortie WHERE id=:id";
        }
        $requeteModifierJeu = BaseDeDonnees::getConnexion()-> prepare($MESSAGE_SQL_MODIFIER_JEU); 

        $requeteModifierJeu->bindParam(':id', $jeu['id'], PDO::PARAM_STR);
        $requeteModifierJeu->bindParam(':titre', $jeu['titre'], PDO::PARAM_STR);
        $requeteModifierJeu->bindParam(':description', $jeu['description'], PDO::PARAM_STR);
        $requeteModifierJeu->bindParam(':studio', $jeu['studio'], PDO::PARAM_STR);
        $requeteModifierJeu->bindParam(':prix', $jeu['prix'], PDO::PARAM_STR);
        $requeteModifierJeu->bindParam(':difficulter', $jeu['difficulter'], PDO::PARAM_STR);
        $requeteModifierJeu->bindParam(':dateSortie', $jeu['dateSortie'], PDO::PARAM_STR);
        return $requeteModifierJeu-> execute();
    }
}