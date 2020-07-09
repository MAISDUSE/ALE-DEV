<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ALE Escalade - <?=$adherent->getNom()?></title>
    <link rel="stylesheet" href="../View/Design/HeaderFooter.css">
    <link rel="stylesheet" href="../View/Design/Adherent.css">
  </head>
  <body>

    <?php
        include("Design/Header.php");
    ?>
    <section>
      <div class="col1">
        <h1>Civilité</h1>
        <p>Nom : </p>
        <p>Prénom : </p>
        <p>Date de naissance : </p>
        <p>Sexe :  </p>
      </div>
      <div class="col3">
        <h1>Escalade</h1>
        <p>N° Licence :</p>
        <p>Type Licence :</p>
        <p>Passeport :</p>
      </div>
      <div class="col2">
        <h1>Contact</h1>
        <p>Adresse : </p>
        <p>Adresse Mail : </p>
        <p>N° Téléphone : </p><br>
        <h2>Personne à contacter en cas d'urgence : </h2>
        <p>Nom : </p>
        <p>Prénom : </p>
        <p>Adresse : </p>
        <p>Adresse Mail : </p>
        <p>N° Téléphone : </p>
      </div>
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