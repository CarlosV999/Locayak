<?php
require_once "../configuration.php";
require_once "../administration/header-admin.php";
?>

<link rel="stylesheet" href="../css/membre.css?<?php echo time(); ?>">
<div class="informationsBox">
</div>
<div class="chat" id="chat">
<div class="bubble me"> Romain : Salut preuve de concepte</div>
</div>

<div class="messageBox">
<form action="#" method="POST" id="formulaireEnvoie">
      <input type="text" class="messageInput" id="messageInput" >
      <input type="submit" value="Envoyer">
</form>
</div>


</br>
<?php
       include_once "../administration/footer-admin.php";
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>