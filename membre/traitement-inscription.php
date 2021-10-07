<?php

require_once "configuration.php";

require_once CHEMIN_DAO."MembreDAO.php";



$repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/DevoirTransactionnel/images/";
$fichierDestination = $repertoireIllustration . $_FILES['illustration']['name'];

$fichierSource = $_FILES['illustration']['tmp_name'];


move_uploaded_file($fichierSource,$fichierDestination);

$motPasse1 = $_POST['passe'];
$motPasse2 = $_POST['passe2'];
$email = $_POST['email'];
//print_r($motPasse1);
//print_r($motPasse2);

$validePasseEmail = MembreDAO::validerEmailPasse($email, $motPasse1, $motPasse2);

if($validePasseEmail)
{  
    $mdpHache = password_hash($_POST['passe'], PASSWORD_DEFAULT);
    //print_r($mdpHache);
    $filtresMembre = array();

    $filtresMembre['nom'] = FILTER_SANITIZE_STRING;
    $filtresMembre['prenom'] = FILTER_SANITIZE_STRING;
    $filtresMembre['description'] = FILTER_SANITIZE_STRING;
    $filtresMembre['adresse'] = FILTER_SANITIZE_STRING;
    $filtresMembre['telephone'] = FILTER_SANITIZE_STRING;
    $filtresMembre['passe'] = FILTER_SANITIZE_STRING;
    $filtresMembre['email'] = FILTER_VALIDATE_EMAIL;
    $filtresMembre['telephone'] = FILTER_SANITIZE_STRING;
    //$filtresMembre['image'] = FILTER_SANITIZE_STRING;

    $informationMembre = filter_input_array(INPUT_POST, $filtresMembre);
    $informationMembre['passe'] = $mdpHache;

    //print_r(" voici la variable hâchée: ".$informationMembre['passe']);
    $reussiteAjoutMembre = MembreDAO::ajouterMembre($informationMembre);

    if($reussiteAjoutMembre)
    {
        echo "BIENVENUE PARMI NOUS' OUBLIER PAS D'INCRIRE VOS KAYAKS SI VOUS VOULEZ EN LOUER!";
        ?><a href='membre.php'>Retour</a><?php
    }
    else
    {
        echo "Erreur: il a eu un problème... -> ".$reussiteAjoutMembre;
    }
    
}
else
{
    echo 'Il y a un problème avec le mot de passe ou avec le Pseudo, veuiller recommencer svp.';
}

?>

