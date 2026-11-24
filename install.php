<?php
//fichier configuration 
require_once __DIR__ . 'includes/config.php';

//ouverture avec constructeur 
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);
    //verif connexion
    if($mysqli->connect_errno){
        exit('Erreur connexion à la BDD' . $mysqli->connect_error);
    }

    $mysqli->charset('utf8mb4');


    //requete
    $res = $mysqli->query("SELECT id, title FROM recette");
    if($res===false){
        exit('Erreur requete' . $mysqli->error);
    }

    while($ligne = $res->fetch_assoc()){
        echo htmlspecialchars($ligne['title']) . '<br>';
    }

    //libérer la mémoire
    $res->free();


    //fermeture
    $mysqli->close();


?>