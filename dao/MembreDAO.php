
<?php
require_once  "basededonee.php";
require_once  "BaseDeDonnee.php";

class MembreDAO{
    public static function listeMembre()
    {
        $SQL_RECUPERER_MEMBRE = "SELECT * FROM `membre`";
        $requeteSelectKayak = getConnexion()->prepare($SQL_RECUPERER_MEMBRE);
        $requeteSelectKayak->execute();
        return $requeteSelectKayak->fetchAll();
    }
    public static function recupererMembre($id)
    {
        $SQL_RECUPERER_MEMBRE = "SELECT * FROM `membre` WHERE id = :id";
        $requeteSelectMembre = getConnexion()->prepare($SQL_RECUPERER_MEMBRE);
        $requeteSelectMembre->bindParam(':id', $id, PDO::PARAM_STR);
        $requeteSelectMembre->execute();
        return $requeteSelectMembre->fetchAll();
    }
    public static function ajouterMembre($informationMembre)
    {
          
        $MESSAGE_SQL_AJOUTER_MEMBRE = "INSERT INTO membre (nom,adresse,type,adresse,cout,idMembre,image) VALUES (:titreAnnonce,:descriptionAnnonce,:type, :adresse,:cout,:idMembre,'$image')";
        $requeteAjoutKayak = BaseDeDonnee::getConnexion() -> prepare($MESSAGE_SQL_AJOUTER_JEU); 

        $requeteAjoutKayak->bindParam(':titreAnnonce', $informationKayak['titreAnnonce'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':descriptionAnnonce', $informationKayak['descriptionAnnonce'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':type', $informationKayak['type'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':adresse', $informationKayak['adresse'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':cout', $informationKayak['cout'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':idMembre', $informationKayak['idmembre'], PDO::PARAM_STR);
        return $requeteAjoutKayak-> execute();
    }
}
