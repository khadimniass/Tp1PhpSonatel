<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exercice8/css/style.css">
    <title>EXERXICE 11</title>
</head>
<body>
    <div class="container">
        <p>veillez entrez un nombre positif</p>
        <form action="controller.php" method="post">
            <div class="field">
                <label for="N">NOMBRE </label><br>
                <input type="text" id="N" name="nombre" placeholder="entrez une valeur positive">
            </div>
            <div>
                <input class="btn" type="submit" name="btn" value="VALIDER">
            </div>
        </form>
    </div>
    <div>
        <?php
        //les nombres premiers
        if($_SESSION['tab'])
        {
        echo "les nombres premiers : <br>";
        foreach ($_SESSION['tab']['premier'] as $key => $value) {
            echo $value . "<br>";
        }

        
        //les nombres premiers
        echo "les nombres inférieurs à la moyenne : <br>";
        foreach ($_SESSION['tab']['infmoy'] as $key => $value) {
            echo $value . "<br>";
        }

        //les nombres premiers
        echo "les nombres supérieurs à la moyenne : <br>";
        foreach ($_SESSION['tab']['supmoy'] as $key => $value) {
            echo $value . "<br>";
        }
    }

        if ($_SESSION['tab']) {
            unset($_SESSION['tab']);
        }
        ?>
    </div>
</body>

</html>