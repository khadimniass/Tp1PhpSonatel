<?php
session_start();
// echo session_save_path(); // cette fonction permet de voir le fichier de stockages des sessions
// session_name('equation');
include 'fonctions.php';
include '../foncrionsCommunes.php';
$_SESSION['equation']="";
if (isset($_POST['btn-sub'])) {
    if (estNombre($_POST['a']) && estNombre($_POST['b']) && estNombre($_POST['c'])) {
        $_SESSION['a']=$_POST['a'];
        $_SESSION['b']=$_POST['b'];
        $_SESSION['c']=$_POST['c'];
        header('location:index.php');
        exit();
    }else {
        header('location:index.php');
        exit();
    }
}
