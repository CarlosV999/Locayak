<?php
// Permet d'avoir un lien permanant avec les different chemin du projet 
session_start();
define("CHEMIN_DAO",$_SERVER['DOCUMENT_ROOT']."/DevoirTransactionnel/dao/");

//TRADUCTION

$locale = "en_CA";

$racine = "/var/www/html/DevoirTransactionnel/poc/traduction/locales";
$domaine = "messages";

//include "gettext.inc";
putenv('LC_ALL='.$locale);
//T_setlocale(LC_MESSAGES, $locale);
setlocale(LC_ALL, $locale);

bindtextdomain($domaine,$racine);
textdomain($domaine);
?>