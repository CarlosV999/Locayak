<?php
require_once  "basededonee.php";

function listeKayak()
{
    $MESSAGE_SQL_RECUPERER = "SELECT * FROM `kayak`";
    $requeteSelectKayak = getConnexion()->prepare($MESSAGE_SQL_RECUPERER);
    $requeteSelectKayak->execute();
    return $requeteSelectKayak->fetchAll();
}