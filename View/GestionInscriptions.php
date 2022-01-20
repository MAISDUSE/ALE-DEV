<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../View/Design/GestionInscriptions.css">
  <link rel="stylesheet" href="../View/Design/HeaderFooter.css">
  <title>ALE Escalade - Gestion Inscriptions</title>
  <script type="text/javascript">
    function ConfirmerRefus() {
      if (confirm("Voulez vous vraiment refuser cette inscription ?")) {
        formulaire.submit();
      }
    }

    function ConfirmerAcceptation() {
      if (confirm("Voulez vous vraiment accepter cette inscription ?")) {
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
      <th>Nom</th>
      <th>Prénom</th>
      <th>Date de naissance</th>
      <th>Adresse E-Mail</th>
      <th>N° Téléphone</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>
        <form action="../Controler/GestionInscriptions.ctrl.php" method="post" enctype="multipart/form-data" name="formulaire">
          <input type="submit" name="accepter" value="Accepter" onclick="ConfirmerAcceptation()"><br>
          <input type="submit" name="refuser" value="Refuser" onclick="ConfirmerRefus()"><br>
          <input type="hidden" name="idInscription" value="">
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