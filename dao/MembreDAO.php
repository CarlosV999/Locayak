
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
        return $requeteSelectMembre->fetch();
    }

    public static function ajouterMembre($informationMembre)
    {
        //print_r($informationMembre['mail']);

        $MESSAGE_SQL_AJOUTER_MEMBRE = "INSERT INTO membre (nom, prenom, telephone, adresse, email, mdp) 
                                       VALUES (:nom,:prenom, :telephone, :adresse, :email, :mdp)";

        $requeteAjoutMembre = BaseDeDonnee::getConnexion() -> prepare($MESSAGE_SQL_AJOUTER_MEMBRE); 

        $requeteAjoutMembre->bindParam(':nom', $informationMembre['nom'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':prenom', $informationMembre['prenom'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':adresse', $informationMembre['adresse'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':telephone', $informationMembre['telephone'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':email', $informationMembre['mail'], PDO::PARAM_STR);
        $requeteAjoutMembre->bindParam(':mdp', $informationMembre['motDePasse'], PDO::PARAM_STR);
        return $requeteAjoutMembre-> execute();
    }

    public static function recupererEmail($email)
    {
        
        $SQL_RECHERCHER_EMAIL = "SELECT email FROM membre WHERE email LIKE CONCAT('%', :email, '%')";

        $rechercherEmail = BaseDeDonnee::getConnexion() -> prepare($SQL_RECHERCHER_EMAIL);

        $rechercherEmail->bindParam(':email', $email, PDO::PARAM_STR);
        $rechercherEmail->execute();

        $listeEmails = $rechercherEmail->fetchAll();
        
        return $listeEmails;
    }

    public static function validerIdentificationMembre($infoIdMembre)
    {
        $membreIdentifier = true;
        $mailMembre = $infoIdMembre['mail'];
        $mpdMembre = $infoIdMembre['motDePasse'];
        //$mailRecuperer = array();
        $mailRecuperer = MembreDAO::recupererEmail($mailMembre);

        if(empty($mailRecuperer))
        {
            $membreIdentifier = false;
            return $membreIdentifier;
        }   
        elseif(!empty($mailRecuperer))
        {
            $email = $mailRecuperer['0']['email'];
            
            $REQUETE_RECHERCHE_MDP = "SELECT mdp FROM membre WHERE email = '$email'";
            $rechercherMDP = BaseDeDonnee::getConnexion() -> prepare($REQUETE_RECHERCHE_MDP);
             $rechercherMDP->execute();
    
            $mdpTrouver = $rechercherMDP->fetch();
            $mdpHache = $mdpTrouver['mdp'];
            print_r($mdpHache);

            if(password_verify($mpdMembre, $mdpHache))
            {
                echo "Ça fonctionne pas";
            }
            else
            {
                echo "Bienvenue parmi nous!";
            }
           
        }
        

    }
    public static function validerEmailPasse($email, $passe1, $passe2)
    {
        $resultat = true;

        if($passe1 != $passe2)
        {
            $resultat = false;
            return $resultat;
        }

        $listeEmails = MembreDAO::recupererEmail($email);

        //print_r($listeEmails);

        if(!empty($listeEmails))
        {
            $resultat = false;
            return $resultat;
        }
        return $resultat;
  
    }
}
