<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>ALE Escalade - Gestion Adhérents</title>
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
      <th>N° Licence</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Date de naissance</th>
      <th>Adresse E-Mail</th>
      <th>N° Téléphone</th>
      <th>Role</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>
        <form action="../Controler/GestionAdherents.ctrl.php" method="post" enctype="multipart/form-data">
          <input type="submit" name="viewUser" value="Voir Plus"><br>
          <input type="submit" name="modifUser" value="Modifier"><br>
          <input type="submit" name="supprUser" value="Supprimer" onclick='return ConfirmerSuppression()'><br>
          <input type="hidden" name="idUser" value="">
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