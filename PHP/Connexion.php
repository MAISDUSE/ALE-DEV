<?php
    $mail = htmlentities($_POST['mail']);
    $pswd = htmlentities($_POST['passwd']);

    /*
        CONNECTION BD TEST


    */

    session_start();
    $mess_err = "Problème connexion";
    $_SESSION['erreur'] = $mess_err;

    include("../View/Connexion.php");


?>