
<?php
require_once  "basededonee.php";
require_once  "BaseDeDonnee.php";

class MembreDAO{
    public static function listeMembre()
    {
        $SQL_RECUPERER_MEMBRE = "SELECT * FROM `membre`";
        $requeteSelectKayak = getConnexion()->prepare($SQL_RECUPERER_MEMBRE);
        $requeteSelectKayak->execute();
        return $requeteSelectKayak->fetchAll();
    }
    public static function recupererMembre($id)
    {
        $SQL_RECUPERER_MEMBRE = "SELECT * FROM `membre` WHERE id = :id";
        $requeteSelectMembre = getConnexion()->prepare($SQL_RECUPERER_MEMBRE);
        $requeteSelectMembre->bindParam(':id', $id, PDO::PARAM_STR);
        $requeteSelectMembre->execute();
        return $requeteSelectMembre->fetchAll();
    }
    public static function ajouterMembre($informationMembre)
    {
          
        $MESSAGE_SQL_AJOUTER_MEMBRE = "INSERT INTO membre (nom,prenom,adresse,email,description,locateur,image,cote) VALUES (:nom,:prenom,:adresse,:email, :description,:locateur,:image,:cote)";
        $requeteAjoutMembre = BaseDeDonnee::getConnexion() -> prepare($MESSAGE_SQL_AJOUTER_MEMBRE); 

        $requeteAjoutMembre->bindParam(':nom', $informationMembre['nom'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':prenom', $informationMembre['prenom'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':adresse', $informationMembre['adresse'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':email', $informationMembre['email'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':description', $informationMembre['description'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':locateur', $informationMembre['locateur'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':image', $informationMembre['image'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':cote', $informationMembre['cote'], PDO::PARAM_STR);
        return $requeteAjoutMembre-> execute();
    }

    public static function validerPseudoPasse($pseudo, $passe1, $passe2)
    {
        $resultat = true;

        if($passe2 == "" || $passe1 == "")
        {
            $resulat = false;
            return $resulat;
        }

        if($pseudo == "")
        {
            $resultat = false;
            return $resultat;
        }

        if($passe1 != $passe2)
        {
            $resultat = false;
            return $resultat;
        }

        $SQL_RECHERCHER_PSEUDO = "SELECT pseudo FROM membre WHERE pseudo LIKE '%$pseudo%'";

        //print_r($SQL_RECHERCHER_PSEUDO);

        $rechercherMembre = BaseDeDonnee::getConnexion() -> prepare($SQL_RECHERCHER_PSEUDO);
        $rechercherMembre->execute();

        $listePseudos = $rechercherMembre->fetchAll();

        //print_r($listePseudos);

        foreach($listePseudos as $nom)
            if($nom['pseudo'] == $pseudo)        
                $resultat = false;

        return $resultat;

    }
}
