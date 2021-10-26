<?php
require_once "configuration.php";
 session_destroy();

 include_once "../header";
?>


</body>
<?php
header('Location: formulaire-authentification.php');
include_once "../footer";