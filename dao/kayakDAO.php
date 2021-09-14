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

    public static function voirMembre()
    {

    }
    public static function listeMembre()
    {
        $SQL_RECUPERER_MEMBRE = "SELECT * FROM `membre`";
        $requeteSelectKayak = getConnexion()->prepare($SQL_RECUPERER_MEMBRE);
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
}