<?php
    require_once "configuration.php";
    require_once CHEMIN_DAO."KayakDAO.php";
    
    $imageRecu = KayakDAO::recupererImagePourIdsuivant($_GET['imageId']);
    $image = $imageRecu['image'];
    $idImage = $imageRecu['id'];
    //$array = [$imageRecu];
    
    //echo $image;
    echo json_encode(["id"=> $idImage,"image"=> $image]);
    //print_r($imageRecu);

    
    