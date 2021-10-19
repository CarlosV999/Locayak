<?php



// Traitement de identification.php

// 1ere étape de sécurisation = PHP FILTER



//print_r($_SESSION);


include_once "../administration/header-admin.php";
?>



<body>


            <h2>Zone Membre</h2>

                <h2>Formulaire d'inscription</h2>

        <div id="groupe-inscription">

            <form method="post" action="traitement-inscription.php">


                <fieldset>



                    <legend>Informations Personnelle</legend>



                    <div class="form-group" id="entree-nom">

                        <label for="nom">Votre Nom</label>

                        <input type="text" id="nom" name="nom" />

                    </div>


                    <div class="form-group" id="entree-prenom">

                        <label for="prenom">Votre Prénom</label>

                        <input type="text" id="prenom" name="prenom" />

                    </div>

                    <div class="form-group" id="entree-telephone">

                    <label for="prenom">Votre numéro de téléphone</label>

                    <input type="text" id="telephone" name="telephone" />

                    </div>

                    <div class="form-group" id="entree-email">

                        <label for="email">Votre Email</label>

                        <input type="text" id="email" name="email" />

                    </div>


                    <div class="form-group" id="entree-passe">

                        <label for="passe">Entrer votre Mot de Passe</label>

                        <input type="password" id="passe" name="passe" />

                    </div>


                    <div class="form-group" id="entree-passe2">

                        <label for="passe2">Confirmer votre Mot de Passe</label>

                        <input type="password" id="passe2" name="passe2" />

                    </div>

                </fieldset>

                <input type="submit" name="" value="Enregistrer">



            </form>
        
        </div>

<?php
  include_once "../administration/footer-admin.php";
  ?>

     

</body>



</html>