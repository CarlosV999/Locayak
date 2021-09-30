<?php
    include_once "../administration/header-admin.php";
    
    session_start();
   
    $_SESSION['pseudo'] = "pied";
    
    usset($_SESSION['pseudo']);

    $_SESSION['pseudo'] = "pied";
    //$_SESSION['pseudo'] = NULL;
?>

<?php
if(!isset($_SESSION['pseudo']))
{

    print_r($_SESSION['pseudo']);
    //print_r("tu es inscris");
    ?><a href='traitement_deconnection.php'>Retour</a><?php
    //echo "traitement_deconnection.php";

}
else
{ 
?>
  
<form method="post" action="membre/traitement-authentification.php">



<div>

    <label for="pseudo">Pseudo</label>

    <input type="text" id="pseudo" name="pseudo"/>

</div>

<div>

    <label for="passe">Mot de passe</label>

    <input type="password" id="passe" name="passe"/>

</div>

<input type="submit" name="membre-authentification" value="Me connecter" />



</form>
<?php
}


    include_once "../administration/header-admin.php";
?>
