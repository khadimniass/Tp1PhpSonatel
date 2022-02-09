<?php
session_start();
include 'fonctions.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exercice8/css/style.css">
    <title>multiplication</title>
    <style>
        .sortie{
            color: red; 
            text-align: center; 
            font-size: 2rem; 
            background-color: green; 
            width: 50%;
            margin: auto auto;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <p>
            Entrer un nombre N à l’aide d’un formulaire puis
            générer une table de multiplication du nombre saisi.
            N est positif.
        </p>
        <form action="controller.php" method="post">
            <div class="field">
                <label for="N">N : </label>
                <input type="text" id="N" name="number" placeholder="entrez une valeur positive">
            </div>
            <div>
                <input class="btn" type="submit" name="btn" value="MULTIPLICATION">
            </div>
        </form>
    </div>
    <div class="sortie">
        <?php
            if ($_SESSION['T']) {
                multipliction($_SESSION['post']['number']);
            }
        ?>
    </div>
</body>

</html>