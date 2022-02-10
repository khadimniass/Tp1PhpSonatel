<?php
session_start();


$_SESSION['Test']=false;
if (isset($_POST['btn-textarea']) && !empty($_POST['btn-textarea'])) {
    $_SESSION['Test']=true;
    $_SESSION['post'] = $_POST;
    header('location:index.php');
    die();
}else {
    header('location:index.php');
    die();
}
$text = rtrim($_POST['text']);
