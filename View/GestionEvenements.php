<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>ALE Escalade - Gestion Evenements</title>
  <link rel="stylesheet" href="../View/Design/HeaderFooter.css">
  <link rel="stylesheet" href="../View/Design/GestionInscriptions.css">
  <script type="text/javascript">
    function ConfirmerSuppression() {
      if (confirm("Voulez vous vraiment supprimer cette actualité ?")) {
        formulaire.submit();
      }
    }
  </script>
</head>

<body>

  <?php
  include("Design/Header.php");
  ?>
  <table class="blueTable">
    <tr>
      <th>Titre</th>
      <th>Auteur</th>
      <th>Date de création</th>
      <th>Action</th>
    </tr>
    <tr>
      <td></td>
      <td>
        <form class="../Controler/GestionActualites.ctrl.php" method="post" enctype="multipart/form-data">
          <input type="submit" name="viewAuteur" value="">
          <input type="hidden" name="idAuteur" value="">
        </form>
      </td>
      <td></td>
      <td>
        <form action="../Controler/GestionActualites.ctrl.php" method="post" enctype="multipart/form-data" name='formulaire'>
          <input type="submit" name="viewActualite" value="Voir Plus"><br>
          <input type="submit" name="modifActualite" value="Modifier"><br>
          <input type="submit" name="supprActualite" value="Supprimer" onclick='ConfirmerSuppression()'><br>
          <input type="hidden" name="idActualite" value="">
        </form>
      </td>
    </tr>
  </table>

  <?php
        include("Design/Footer.php");
    ?>

  <script src="../Script/JQuery.js"></script>
  <script src="../Script/Controler.js"></script>
  <script src="../Script/Model.js"></script>
  <script src="../Script/View.js"></script>

</body>

</html>