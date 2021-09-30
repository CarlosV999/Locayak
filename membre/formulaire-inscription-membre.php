<?php



// Traitement de identification.php

// 1ere étape de sécurisation = PHP FILTER



//print_r($_SESSION);


include_once "../administration/header-admin.php";
?>



<body>



    <section id="contenu">

        <header>

            <h2>Zone Membre</h2>

        </header>





        <section id="contenu">

            <header>

                <h2>Formulaire d'inscription</h2>

            </header>



            <form method="post" action="traitement-inscription.php">





                <fieldset>



                    <legend>Informations Personnelle</legend>



                    <div id="entree-nom">

                        <label for="nom">Votre Nom</label>

                        <input type="text" id="nom" name="nom" />

                    </div>



                    <div id="entree-prenom">

                        <label for="prenom">Votre Prénom</label>

                        <input type="text" id="prenom" name="prenom" />

                    </div>



                    <div id="entree-description">

                        <label for="description">Décription de vous même</label>                        

				    <textarea name="description" id="description"></textarea>	

                    </div>



                    <div id="entree-pseudo">

                        <label for="pseudo">Votre Pseudo</label>

                        <input type="text" id="pseudo" name="pseudo" />

                    </div>



                    <div id="entree-email">

                        <label for="email">Votre Email</label>

                        <input type="text" id="email" name="email" />

                    </div>



                    <div id="entree-passe">

                        <label for="passe">Entrer votre Mot de Passe</label>

                        <input type="password" id="passe" name="passe" />

                    </div>



                    <div id="entree-passe2">

                        <label for="passe2">Confirmer votre Mot de Passe</label>

                        <input type="password" id="passe2" name="passe2" />

                    </div>







                </fieldset>



                <input type="submit" name="" value="Enregistrer">



            </form>



        </section>

<?php
  include_once "../administration/footer-admin.php";
  ?>

     

</body>



</html>