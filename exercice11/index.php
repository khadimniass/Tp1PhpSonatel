<?php session_start(); 
// include '../ERROR_MANAGER.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exercice8/css/style.css">
    <title>EXERXICE 11</title>
    <style>
        .output {
            background-color: #EAECEE;
            display: flex;
            text-align: center;
            width: 80%;
            margin: 2vh auto;
            justify-content: center;
            border-radius: 8px;
        }

        .output div {
            margin: 5%;
            border-radius: 5px;
        }

        .premier {
            background-color: #48C9B0;
            color: white;
        }

        .inferieur {
            background-color: #F7DC6F;
            color: white;
        }

        .superieur {
            background-color: #5DADE2;
            color: white;
        }
        .error-message{
            margin-top: 1vh;
            color: red; 
            text-align: center;
        }
    </style>
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
    <center class="error-message"> <?php echo $_SESSION['message'];  ?></center>
    </div>
    <?php
    if ($_SESSION['message']) { ?>
    <?php
}
    //les nombres premiers
    if ($_SESSION['tab']) {
    ?>
        <div class="output">
            <div class="premier">
                <?php
                echo "les nombres premiers <br>";
                foreach ($_SESSION['tab']['premier'] as $key => $value) {
                    echo $value . "<br>";
                }
                ?>
            </div>

            <div class="inferieur">
                <?php
                //les nombres supérieur a la moyenne
                echo "les nombres inférieurs à la moyenne <br>";
                foreach ($_SESSION['tab']['infmoy'] as $key => $value) {
                    echo $value . "<br>";
                }
                ?>
            </div>
            <div class="superieur">
            <?php
            //les nombres inférieur a la moyenne
            echo "les nombres supérieurs à la moyenne<br>";
            foreach ($_SESSION['tab']['supmoy'] as $key => $value) {
                echo $value . "<br>";
            }
        }

        if ($_SESSION['tab']) {
            unset($_SESSION['tab']);
        }
        if ($_SESSION['message']) {
            unset($_SESSION['message']);
        }
                ?>
            </div>
        </div>
</body>

</html>