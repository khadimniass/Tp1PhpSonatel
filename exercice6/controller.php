<?php
session_start();
session_name('equation');
include 'fonctions.php';
include '../foncrionsCommunes.php';
$_SESSION['equation']="";
if (isset($_POST['btn-sub'])) {
    if (estNombre($_POST['a']) && estNombre($_POST['b']) && estNombre($_POST['c'])) {
        $_SESSION['equation']=second_degre($_POST['a'], $_POST['b'], $_POST['c']) . "\n";
    } else {
        header('location:index.php');
    }
}
