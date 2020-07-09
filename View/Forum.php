<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../View/Design/Forum.css">
    <link rel="stylesheet" href="../View/Design/HeaderFooter.css">

    <title>Forum ALE Escalade</title>
</head>

<body>

    <?php
    include("Design/Header.php");
    ?>

    <div class="listeSujet">
        <div class="entete">
            <h2>Liste des sujets de discussions</h2>
            <a href="../Controler/CreerSujet.ctrl.php" class="creer_sujet">
                <h2>Créer un sujet</h2>
            </a>
        </div>


        <a href="" class="sujets">
            <aside>
                <h4></h4>
                <p class="desc"></p>
            </aside>

            <p class="date"></p>

        </a>


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