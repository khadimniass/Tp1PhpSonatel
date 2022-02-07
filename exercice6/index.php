<?php session_start();  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>saisi des donnees pour second degres</title>
</head>

<body>
    <div class="content">
        <form action="controller.php" method="POST">
            <h2>ax²+bx+c=0</h2>
            <div class="cellule">
                <label for="a">a : </label>
                <input class="champ" id="a" name="a" type="text" placeholder="       ax²+bx+c=0">
            </div>
            <div class="cellule">
                <label for="b">b : </label>
                <input class="champ" id="b" name="b" type="text" placeholder="       ax²+bx+c=0">
            </div>

            <div class="cellule">
                <label for="c">c : </label>
                <input class="champ" id="c" name="c" type="text" placeholder="       ax²+bx+c=0">
            </div>

            <div class="cellule ">
                <input class="btn" type="submit" name="btn-sub" value="calculer">
            </div>
        </form>
        <?php
        if (isset($_SESSION)) {
            echo $_SESSION['equation'];

            unset($_SESSION['equation']);
        }                               
        ?>
    </div>
</body>

</html>