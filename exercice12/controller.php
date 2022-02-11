<?php
session_start();
include '../ERROR_MANAGER.php';
$moiFrancais = [
    ["Janvier", "Avril", "Juillet", "Octobre"],
    ["Février", "Mai", "Août", "Novembre"],
    ["Mars", "Juin", "Septembre", "Décembre"]
];

$moiAnglais = [
    ["January", "April", "July", "October"],
    ["February", "May", "August", "November"],
    ["March", "June", "November", "December"]
    
];
$_SESSION['test']=false;
if (isset($_POST['lang'])) {
    $_SESSION['test']=true;
    switch ($_POST['choix']) {
        case '1':
            echo "clandrier français";
            $_SESSION['clandrier'] = $moiFrancais;
            $_SESSION['lang']="français";
            break;
        case '2':
            echo "clandar";
            $_SESSION['clandrier'] = $moiAnglais ;
            $_SESSION['lang']="Anglais";
        break;
        default:
        echo "clandrier français";
        $_SESSION['clandrier'] = $moiFrancais;
        $_SESSION['lang']="français";
        break;
    }
    header('location:index.php');
    die();
}

