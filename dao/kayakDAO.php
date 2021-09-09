<?php
require_once  "basededonee.php";
class kayakDAO{
    public static function listeKayak()
    {
        $MESSAGE_SQL_RECUPERER = "SELECT * FROM `kayak`";
        $requeteSelectKayak = getConnexion()->prepare($MESSAGE_SQL_RECUPERER);
        $requeteSelectKayak->execute();
        return $requeteSelectKayak->fetchAll();
    }

    public static function ajouterKayak($informationKayak,$image)
    {
        print_r($informationKayak);
    }
}