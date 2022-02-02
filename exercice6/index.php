<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="form.html.php">formulaire de calcul</a>
   <h2>a = <?php echo $_GET['a']; ?> </h2>
   <h2>b = <?php echo $_GET['b']; ?> </h2>
   <h2>c = <?php echo $_GET['c']; ?> </h2>
<?php
include 'fonctions.php';
second_degre($_GET['a'],$_GET['b'],$_GET['c'])."\n";
?>
<a href="form.html.php">formulaire de calcul</a>