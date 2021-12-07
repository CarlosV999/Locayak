<?php
// Permet d'avoir un lien permanant avec les different chemin du projet 
session_start();
define("CHEMIN_DAO",$_SERVER['DOCUMENT_ROOT']."/DevoirTransactionnel/dao/");

//TRADUCTION

$localeEn = "en_US.utf8";
$localeFr = " ";

$racine = "/var/www/html/DevoirTransactionnel/poc/traduction/locales";
$domaine = "messages";

if ( !empty($_GET['language']) ) {
    $_COOKIE['language'] = $_GET['language'] === 'en' ? 'en' : 'fr';

    //include "gettext.inc";
putenv('LC_ALL='.$localeEn);
//T_setlocale(LC_MESSAGES, $locale);
setlocale(LC_ALL, $localeEn);
} else {
    $_COOKIE['language'] = 'fr';
    //include "gettext.inc";
putenv('LC_ALL='.$localeFr);
//T_setlocale(LC_MESSAGES, $locale);
setlocale(LC_ALL, $localeFr);
}
setcookie('language', $_COOKIE['language']);

bindtextdomain($domaine,$racine);
textdomain($domaine);

?>