<?php
include '../ERROR_MANAGER.php';
include_once 'fonctions.php';
include_once '../exercice8/fonctions.php';
include_once '../foncrionsCommunes.php';

if (isset($_POST['btn_display'])) {
    if (estNombre($_POST["N"]) && is_positif($_POST["N"])) {
        
        gen_champ($_POST["N"]); 

    } else {
        // echo "veillez entrer un nombre ! positif";
        header('location:index.php');
        die();
    }
}

