<?php
session_start();
include 'fonctions.php';
include '../foncrionsCommunes.php';

$_SESSION['T']=false;
if (isset($_POST['btn']) && !empty($_POST['btn'])) {
    $_SESSION['post']= $_POST;
    if (isset($_POST['number']) && estNombre($_POST['number'])) {
        $_SESSION['T']=true;
        header('location:index.php');
        die();
    }else{
        header('location:index.php');
        die();
    }
}