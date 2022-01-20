<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Site web de l'Ale-Escalade</title>

    <link rel="stylesheet" href="../View/Design/Inscription.css">
    <link rel="stylesheet" href="../View/Design/HeaderFooter.css">

</head>

<body>

    <?php
    include("Design/Header.php");
    ?>
    <div class="section">
        <div class="wrapper">

            <div class="contact-form">
                <h2>Inscription </h2>
                <form name="inscription" class="" action="../Controler/Inscription.ctrl.php" method="post">
                    <div class="input-fields">

                        <form class="" action="index.html" method="post">
                            <div class="input-fields">

                                <label for="nom">Nom : </label>
                                <input type="text" name="nom" placeholder="Votre Nom" class="input" required>
                                <label for="prenom">Prénom : </label>
                                <input type="text" name="prenom" placeholder="Votre Prenom" class="input" required>
                                <label for="sexe">Sexe : </label>
                                <input type="radio" id="homme" name="sexe" value="H" checked>
                                <label for="homme">Homme</label>
                                <input type="radio" id="femme" name="sexe" value="F">
                                <label for="femme">Femme</label>
                                <br>
                                <label for="age">Date de naissance : </label>
                                <input type="date" name="age" placeholder="jj/mm/aa" class="input" required><br>
                                <label for="adresse">Adresse : </label>
                                <input type="text" name="adresse" placeholder="EX : 12 Rue 8 Mai 1945" class="input" required>
                                <label for="codepostal">Code Postal : </label>
                                <input type="text" name="codepostal" placeholder="Ex: 75000" class="input" required>
                                <label for="mail">Adresse mail :</label>
                                <input type="mail" name="mail" placeholder="Email" class="input" required>
                                <label for="tel">Num. Tél :</label>
                                <input type="tel" name="tel" placeholder="EX : 06 12 23 45 56" class="input" required>
                                <label for="passeport">Passeports escalade FFME : </label>
                                <select class="input" name="passeport">
                                    <option value="Blanc" class="passeportClass" selected>Aucun</option>
                                    <option value="Blanc" class="passeportClass">Blanc</option>
                                    <option value="Jaune" class="passeportClass">Jaune</option>
                                    <option value="Orange" class="passeportClass">Orange</option>
                                    <option value="Vert" class="passeportClass">Vert</option>
                                    <option value="Bleu" class="passeportClass">Bleu</option>
                                    <option value="RougePer" class="passeportClass">Rouge Performance</option>
                                    <option value="RougeExt" class="passeportClass">Rouge Grands Espaces</option>
                                    <option value="Noir" class="passeportClass">Noir</option>
                                </select>
                            </div>
                            <div class="message">
                                <div class="assurance">
                                    <label for="base">Assurance : </label>
                                    <input type="radio" id="rc" name="base" value="RC" checked>
                                    <label for="base">RC</label>
                                    <input type="radio" id="base" name="base" value="B">
                                    <label for="base">Base</label>
                                    <input type="radio" id="base+" name="base" value="B+">
                                    <label for="base">Base+</label>
                                    <input type="radio" id="base++" name="base" value="B++">
                                    <label for="base">Base++</label>
                                </div>
                            </div>
                            <div class="contact">
                                <fieldset>
                                    <legend>Contact (Obligatoire)</legend>
                                    <div class="input-fields">
                                        <label for="nomContact">Nom du Contact : </label>
                                        <input type="text" name="nomContact" placeholder="Nom du Contact" class="input" required>
                                        <label for="prenomContact">Prénom du Contact : </label>
                                        <input type="text" name="prenomContact" placeholder="Prenom du Contact" class="input" required>
                                        <label for="mailContact">Adresse mail du Contact :</label>
                                        <input type="mail" name="mailContact" placeholder="Email" class="input" required>
                                        <label for="telContact">Num. Tél Contact:</label>
                                        <input type="tel" name="telContact" placeholder="EX : 06 12 23 45 56" class="input" required>
                                        <label for="adresseContact">Adresse:</label>
                                        <input type="text" name="adresseContact" placeholder="EX : 12 Rue 8 Mai 1945" class="input" required>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="valider">
                                <input type="submit" name="valider" value="Valider" class="input">
                            </div>
                        </form>
                    </div>
            </div>
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