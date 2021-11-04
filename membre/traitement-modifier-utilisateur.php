<?php
require_once "configuration.php";
require_once CHEMIN_DAO."MembreDAO.php";

$filtresKayak = array();

$filtresKayak['prenom'] = FILTER_SANITIZE_STRING;

$kayak= filter_input_array(INPUT_POST, $filtresKayak);

$reussiteAjout = MembreDAO::modifierPrenom($kayak,$_SESSION["idMembre"]);

if($reussiteAjout){
    //echo "Ajout Reussi";
    header('Location: membre.php');
} else
{
    header('Location: membre.php');
}
?>