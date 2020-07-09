<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../View/Design/SujetForum.css">
  <link rel="stylesheet" href="../View/Design/HeaderFooter.css">

  <title>Forum ALE Escalade</title>
</head>

<body>

  <?php
  include("Design/Header.php");
  ?>

  <div class="forum">

    <div class="sujet">
      <h2></h2>

    </div>


    <div class="commentaires">
      <div class="flexcomm">
        <div class="entete">
          <p>Date : </p>
          <p>Créateur : </p>
        </div>
        <div class="contenu"> </div>
      </div>
    </div>
    <div class="commentaires">
      <div class="flexcomm">
        <div class="entete">
          <p>Date : </p>
          <p>Auteur : </p>
        </div>
        <div class="contenu"> </div>
      </div>
    </div>

    <!-- zone poste un commentaire !-->
    <br>
    <form class="" action="../Controler/AddCommentaire.ctrl.php" method="post">
      <label for="numsujet"></label>
      <input type="number" name="sujet" value="" hidden required readonly>
      <label for="Comment">Nouveau commentaire :</label>
      <textarea name="contenu" rows="8" cols="80" placeholder="Commenter" required></textarea><br>
      <input type="submit" name="envoyer" value="Envoyer">
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