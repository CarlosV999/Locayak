<?php
require_once  "BaseDeDonnee.php";
class LocationDAO{
    public static function ajouterKayak($informationKayak,$image)
    {
        $MESSAGE_SQL_AJOUTER_JEU = "INSERT INTO kayak (idClient,idLocateur,idKayak,dateTransac,dateDebutLocation,dateFinLocation) 
                                    VALUES (:idClient,:idLocateur,:idKayak,:dateTransac,:dateDebutLocation,:dateFinLocation)";
        $requeteAjoutKayak = BaseDeDonnee::getConnexion() -> prepare($MESSAGE_SQL_AJOUTER_JEU); 

        $requeteAjoutKayak->bindParam(':idClient', $informationKayak['idClient'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':idLocateur', $informationKayak['idLocateur'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':idKayak', $informationKayak['idKayak'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':dateTransac', $informationKayak['dateTransac'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':dateDebutLocation', $informationKayak['dateDebutLocation'], PDO::PARAM_STR);
        $requeteAjoutKayak->bindParam(':dateFinLocation', $informationKayak['dateFinLocation'], PDO::PARAM_STR);
        return $requeteAjoutKayak-> execute();
    }
}