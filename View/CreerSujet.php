<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Site web de l'Ale-Escalade</title>

  <link rel="stylesheet" href="../View/Design/CreerSujet.css">
  <link rel="stylesheet" href="../View/Design/HeaderFooter.css">


</head>

<body>

  <?php
    include("Design/Header.php");
  ?>

  <div class="CreerSujet">
    <h2>Creer Sujet:</h2>
    <form class="" action="../Controler/CreerSujet.ctrl.php" method="post" enctype="multipart/form-data">
      <div class="input-fields">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" placeholder="Titre" class="input" required>
        <br>
        <label for="contenu">Contenu :</label>
        <textarea id="description" name="contenu" rows="8" cols="80" placeholder="Entrez le contenu du sujet" required></textarea>
        <br>
        <input type="submit" name="poster" value="Poster" class="input">
      </div>
    </form>
  </div>

  <?php
        include("Design/Footer.php");
    ?>

  <script src="../Script/JQuery.js"></script>
  <script src="../Script/Controler.js"></script>
  <script src="../Script/Model.js"></script>
  <script src="../Script/View.js"></script>


</body>

</html>