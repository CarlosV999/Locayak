<?php
    require_once "configuration.php";
    require_once CHEMIN_DAO."KayakDAO.php";
    $listeKayak = KayakDAO::listeKayak();
    foreach($listeKayak as $kayak){

    }