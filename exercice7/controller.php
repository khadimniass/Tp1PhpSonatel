<?php
include_once 'fonctions.php';
include_once '../foncrionsCommunes.php';
/* date precedente */
if ($_POST['suivante']) {
    $j = $_POST['jour'];
    $m = $_POST['moi'];
    $a = $_POST['annee'];
    $_COOKIE['post'] = $_POST;
    $errorTable = [];
    champ_nombre_valide($j, "j", $errorTable);
    champ_nombre_valide($m, "m", $errorTable);
    champ_nombre_valide($a, "a", $errorTable);
    if (count($errorTable)) {
        date_suivante($j, $m, $a);
    } else {
        $_COOKIE['error'] = $errorTable;
        header('location: index.php');
        die();
    }
} else {
    header('location: index.php');
    die();
}
