<?php
//ouverture
    $ok = $mysqli->select_db(if0_43456216_recettes);

    //interface OPbjet
    $mysqli = new mysqli($hote,$user,$mdp,$base);
    //requete
    $res = mysqli->query("SELECT * FROM recette");

    //fermeture
    $mysqli->close();


?>