<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Site web de l'Ale-Escalade</title>

  <link rel="stylesheet" href="../View/Design/CreerEvenement.css">
  <link rel="stylesheet" href="../View/Design/HeaderFooter.css">
  <script src="../Framework/ckeditor/ckeditor.js"></script>


</head>

<body>

  <?php
  include("Design/Header.php");
  ?>

  <div class="CreerEvenement">
    <h2>Ajouter un Evenement :</h2>
    <form class="" action="../Controler/CreerEvenement.ctrl.php" method="post" enctype="multipart/form-data">
      <div class="input-fields">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" placeholder="Titre" class="input" required>
        <br>
        <label for="dateDebut">Date de début :</label>
        <input type="date" name="dateDebut" value="" min="" required>
        <br>
        <label for="dateFin">Date de Fin :</label>
        <input type="date" name="dateFin" value="" min="" required>
        <br>
        <label for="imageFond">Image d'illustration : </label>
        <input multiple type="file" name="imageFond">
        <br>
        <label for="lieu">Lieu : </label>
        <input type="text" name="lieu" placeholder="Lieu" required>
        <br>
        <label for="description">Description :</label>
        <textarea id="description" name="description" rows="8" cols="80" placeholder="Entrez la description de votre événement" required></textarea>
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