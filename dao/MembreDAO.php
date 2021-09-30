
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
          
        $MESSAGE_SQL_AJOUTER_MEMBRE = "INSERT INTO membre (nom,adresse,email,description,locateur,image,cote) VALUES (:nom,:adresse,:email, :description,:locateur,:image,:cote)";
        $requeteAjoutMembre = BaseDeDonnee::getConnexion() -> prepare($MESSAGE_SQL_AJOUTER_MEMBRE); 

        $requeteAjoutMembre->bindParam(':titreAnnonce', $informationMembre['nom'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':descriptionAnnonce', $informationMembre['adresse'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':type', $informationMembre['email'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':adresse', $informationMembre['description'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':cout', $informationMembre['locateur'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':idMembre', $informationMembre['image'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':idMembre', $informationMembre['cote'], PDO::PARAM_STR);
        return $requeteAjoutMembre-> execute();
    }
}
