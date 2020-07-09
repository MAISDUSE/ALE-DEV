<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>ALE Escalade - Gestion Cours</title>
  <link rel="stylesheet" href="../View/Design/HeaderFooter.css">
  <link rel="stylesheet" href="../View/Design/GestionInscriptions.css">
  <script type="text/javascript">
    function ConfirmerSuppression() {
      if (confirm("Voulez vous vraiment supprimer ce cours ?")) {
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
      <th>Entraineur</th>
      <th>Nb Places</th>
      <th>Jour</th>
      <th>Horaires</th>
      <th>Action</th>
    </tr>
    <tr>
      <td></td>
      <td>
        <form class="../Controler/GestionCours.ctrl.php" method="post" enctype="multipart/form-data">
          <input type="submit" name="viewAuteur" value="">
          <input type="hidden" name="idAuteur" value="">
        </form>
      </td>
      <form action="../Controler/GestionCours.ctrl.php" method="post" enctype="multipart/form-data" name='formulaire'>
        <input type="submit" name="modifCours" value="Modifier"><br>
        <input type="submit" name="supprCours" value="Supprimer" onclick="return confirm('Voulez-vous vraiment supprimer ce cours ?')"><br>
        <input type="hidden" name="idCours" value="">
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