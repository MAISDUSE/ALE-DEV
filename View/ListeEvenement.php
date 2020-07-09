<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site web de l'Ale-Escalade</title>

    <link rel="stylesheet" href="../View/Design/Listevalue.css">
    <link rel="stylesheet" href="../View/Design/HeaderFooter.css">
  </head>
  <body>

    <?php
        include("Design/Header.php");
    ?>
    <a href="../Controler/CreerEvenement.ctrl.php"><h2>Créer un évenement</h2></a>
      <section>
        <div class="officiel">
          <h1></h1>
        </div>
        <h2>Posté le :</h2>
        <h2>Posté par : </h2>
        <h2>Date de début : </h2>
        <h2>Durée : </h2>
        <h2>Lieu : </h2>
        <img  src="" alt="imageDeFond" >
        <p></p>
      </section>

      <?php
        include("Design/Footer.php");
    ?>

      <script src="../Script/JQuery.js"></script>
      <script src="../Script/Controler.js"></script>
      <script src="../Script/Model.js"></script>
      <script src="../Script/View.js"></script>
  
  </body>

</html>