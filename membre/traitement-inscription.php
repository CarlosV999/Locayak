<?php

require_once "configuration.php";

require_once CHEMIN_DAO."MembreDAO.php";

$motPasse1 = $_POST['passe'];
$motPasse2 = $_POST['passe2'];
$pseudo = $_POST['pseudo'];
//print_r($motPasse1);
//print_r($motPasse2);

$validePassePseudo = MembreDAO::validerPseudoPasse($pseudo, $motPasse1, $motPasse2);

if($validePassePseudo)
{  
    /*  
    $filtresMembre = array();

    $filtresMembre['nom'] = FILTER_SANITIZE_STRING;
    $filtresMembre['prenom'] = FILTER_SANITIZE_STRING;
    $filtresMembre['description'] = FILTER_SANITIZE_STRING;
    $filtresMembre['pseudo'] = FILTER_SANITIZE_STRING;
    $filtresMembre['email'] = FILTER_VALIDATE_EMAIL;
    $filtresMembre['password'] = FILTER_SANITIZE_STRING;

    $reussiteAjoutMembre = MembreDAO::ajouterMembre($filtresMembre);

    if($reussiteAjoutMembre)
    {
        echo "BIENVENUE PARMI NOUS' OUBLIER PAS D'INCRIRE VOS KAYAKS SI VOUS EN AVEZ À LOUER!";
        ?><a href='membre.php'>Retour</a><?php
    }
    else
    {
        echo "Erreur: ".$reussiteAjoutMembre;
    }
    */

    echo 'Bravo tu as bien écouté les consignes...';
}
else
{
    echo 'Il y a un problème avec le mot de passe ou avec le Pseudo, veuiller recommencer svp.';
}

?>

