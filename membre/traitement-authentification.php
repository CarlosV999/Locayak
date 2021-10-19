<?php
require_once "configuration.php";
require_once CHEMIN_DAO."MembreDAO.php";
$filtreIdMembre = array();

$filtreIdMembre['mail'] = FILTER_VALIDATE_EMAIL;
$filtreIdMembre['motDePasse'] = FILTER_SANITIZE_STRING;

$infoIdMembre = filter_input_array(INPUT_POST, $filtreIdMembre);

$validationIdMembre = MembreDAO::validerIdentificationMembre($infoIdMembre);
//print_r($validationIdMembre);
if($validationIdMembre == false)
{
    echo "Votre identhification n'a pas réussi";
}

if($validationIdMembre == true)
{
    echo "Bienvenue parmi nous!";
}

