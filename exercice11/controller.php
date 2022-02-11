<?php
session_start();
include '../ERROR_MANAGER.php';
include 'fonctions.php';
include '../foncrionsCommunes.php';
$_SESSION['T'] = false;
$numb = $_POST['nombre'];
$TABLEAU = [
    "premier"=> [],
    "infmoy" => [],
    "supmoy" => []
];
$som = 0;
$n = 0;
if (isset($_POST['btn']) && !empty($_POST['btn'])) {
    if (estNombre($numb)) {
        if ($numb>100) {
        //initialisation
        $_SESSION['T'] = true;
        $_SESSION['post'] = $_POST;
        $moy = 1; //c'est la moyenne du tableau premier
        $n_inf=0;
        $n_sup=0;
        //remplissage
        for ($i = 2; $i <= $numb; $i++) {
            if (est_premier($i)) {
                $TABLEAU['premier'][$n] = $i;
                $som = $som + $i;   //la somme des elts du tableau
                $n++;
            }
        }
        
        $moy = ($som) / count($TABLEAU['premier']);
        for ($i = 1; $i < $numb; $i++) {
            if ($i < intval($moy)) {
                $TABLEAU['infmoy'][$n_inf] = $i;
                $n_inf ++;
            } elseif ($i > intval($moy)) {
                $TABLEAU['supmoy'][$n_sup] = $i;
                $n_sup++;
            }
        }
        //stockage a la session
        $_SESSION['tab'] = $TABLEAU;
        header('location:index.php');
        die();
    }else {
        $_SESSION['message']="vellez saisir un nombre supérieur a 100";
        header('location:index.php');
        die();
    }

    } else {
        header('location:index.php');
        die();
    }
}
