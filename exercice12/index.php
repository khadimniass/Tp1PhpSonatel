<?php
session_start();
include 'fonctions.php';
include '../ERROR_MANAGER.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 12</title>
    <style>
        * {
            text-align: center;
        }

        form {
            width: 50%;
            margin: 15vh auto;
        }

        .clandrier {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div>
        <form action="controller.php" method="post">
            <select name="choix" id="">
                <option value=""></option>
                <option value="1">Français</option>
                <option value="2">Anglais</option>
            </select>
            <input type="submit" name="lang" value="VALIDER">
        </form>
        <div class="clandrier">
            <?php
            if (isset($_SESSION['test'])) {
                display_array($_SESSION['clandrier'], $_SESSION['lang']);
            }

            if (isset($_SESSION['clandrier'])) {
                unset($_SESSION['clandrier']);
            }
            if (isset($_SESSION['test'])) {
                unset($_SESSION['test']);
            }
            if (isset($_SESSION['lang'])) {
                unset($_SESSION['lang']);
            }
            ?>
        </div>
    </div>
</body>

</html>