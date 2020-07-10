<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site web de l'Ale-Escalade</title>

    <link rel="stylesheet" href="../View/Design/HeaderFooter.css">
    <link rel="stylesheet" href="../View/Design/Connexion.css">

  </head>
  <body>

    <?php
        include("Design/Header.php");
    ?>
    <div class ="section">
        <div class="wrapper">
          <h2>Connexion </h2>

            <form action="../PHP/Connexion.php" method="post">
              <p class="MessgErreur">
                <?php
                if(isset($_SESSION['erreur'])){
                  echo($_SESSION['erreur']);
                  unset($_SESSION['erreur']);
                }
                ?>
              </p>
              <div class="input-fields">
               <label for="mail">Mail : </label>
               <input type="email" name="mail" placeholder="Votre Mail" class="input" required>
               <label for="passwd">Mot de passe : </label>
               <input type="password" name="passwd" placeholder="Votre Mot de passe" class="input" required>

               <div class="valider">
                <input type="submit" name="valider" value="Connexion" class="input btnValider" id=Valider>
               </div>
             </div>
            </form>
          </div>
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