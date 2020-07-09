<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Site web de l'Ale-Escalade</title>

    <link rel="stylesheet" href="../View/Design/Accueil.css">
    <link rel="stylesheet" href="../View/Design/HeaderFooter.css">
</head>

<body>
    <?php
    include("Design/Header.php");
    ?>

    <article>
        <section class="listeActualite" onload="controler.loadActu()">
            <h1>Actualités :</h1>

        </section>
        <div class="button_article">
            <button class="load_more" onclick="controler.loadActu()">Charger plus</button>
        </div>
    </article>

    <?php
    include("Design/Footer.php");
    ?>

    <script src="../Script/JQuery.js"></script>
    <script src="../Script/Controler.js"></script>
    <script src="../Script/Model.js"></script>
    <script src="../Script/View.js"></script>
</body>


</html>