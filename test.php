<?php
require_once "dao/kayakDAO.php";
$listeKayak = listeKayak();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Page Test</title>
</head>

<body>
  <div class="table">
    <?php
    foreach ($listeKayak as $kayak) {
    ?>
      <table class="tb">
        <colgroup>
          <col style="width: 140px">
          <col style="width: 642px">
        </colgroup>
        <tr>
          <th class="tb-text">Titre</th>
          <th class="tb-text"><a href="kayak.php?id=<?= $kayak['id'] ?>"><?= $kayak['titre']; ?><a></th>
        </tr>
        <tr>
          <td class="tb-text">Description</td>
          <td class="tb-text"><?= $kayak['synopsis']; ?></td>
        </tr>
      </table>
    <?php
    }
    ?>
  </div>
</body>

</html>