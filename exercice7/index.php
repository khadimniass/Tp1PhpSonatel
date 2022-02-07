<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>form</title>
</head>

<body>
    <form action="controller.php" method="post">
        <div class="cellule">
            <label for="jr">entrer le jour en nombre</label>
            <input id="jr" type="text" name="jour" placeholder="jour en nombre <1-8>" value="<?php if (!isset($_COOKIE['error']['j']) && isset($_COOKIE['post'])) echo  $_COOKIE['post']['j']; else ''  ?>">
        </div>

        <div class="cellule">
            <label for="moi">entrer le moi en nombre</label>
            <input type="text" id="moi" name="moi" placeholder="jour en moi <1-12>" value="<?php if (!isset($_COOKIE['error']['m']) && isset($_COOKIE['post'])) echo  $_COOKIE['post']['m']; else ''  ?>">
        </div>

        <div class="cellule">
            <label for="annee">entrer l'annee</label>
            <input type="text" id="annee" name="annee" placeholder="entre une annee" value="<?php if (!isset($_COOKIE['error']['a']) && isset($_COOKIE['post'])) echo  $_COOKIE['post']['a']; else ''  ?>">
        </div>
        <input type="submit" name="suivante" value="date suivante">
        <!-- <input type="submit" name="precedente" value="date precédente"> -->
    </form>
</body>
</html>