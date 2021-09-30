<?php
require_once "configuration.php";

require_once CHEMIN_DAO."MembreDAO.php";

$filtresKayak = array();

$filtresKayak['nom'] = FILTER_SANITIZE_STRING;
$filtresKayak['prenom'] = FILTER_SANITIZE_STRING;
$filtresKayak['adresse'] = FILTER_SANITIZE_STRING;
$filtresKayak['email'] = FILTER_SANITIZE_STRING;
$filtresKayak['description'] = FILTER_SANITIZE_STRING;
$filtresKayak['cout'] = FILTER_SANITIZE_NUMBER_INT;
$filtresKayak['illustration'] = FILTER_SANITIZE_NUMBER_INT;
$filtresKayak['idMembre'] = "0";