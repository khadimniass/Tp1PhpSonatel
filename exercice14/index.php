<?php
session_start();
include_once '../ERROR_MANAGER.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero de telephon</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="controller.php" method="post">
        <div class="numero">
            <label for="text" style="margin: 50px;">remplir les numeros</label> <br>
            <textarea name="numero" id="text" cols="30" rows="10" placeholder="list de numero"></textarea><br>
            <input class="btn" type="submit" name="btn-textarea" value="ENVOYER">
        </div>
    </form>
    <?php
    if (isset($_SESSION['message_error'])) {
        echo "<span class='error'>".$_SESSION['message_error']."</span>";
    } ?>


    <div class="output">
        <?php
        echo "<div class='correct'>";
        if (isset($_SESSION['numb_correct'])) {
            echo "numéro correct <br>";
            echo "<textarea style='color:green;' name='' id='' cols='35' rows='10' readonly>";
            foreach ($_SESSION['numb_correct'] as $key => $value) {
                echo $value . " ";
            }
            echo "</textarea> <br>";
        }
        echo "</div>";

        echo "<div class='incorrect'>";
        if (isset($_SESSION['numb_incorrect'])) {
            echo "numéro incorrect <br>";
            echo "<textarea style='color:red;' name='' id='' cols='35' rows='10' readonly>";
            foreach ($_SESSION['numb_incorrect'] as $key => $value) {
                echo $value . " ";
            }
            echo "</textarea> <br>";
        }
        echo "</div>";

        echo "<div class='operateur'>";
        if (isset($_SESSION['operateur'])) {
            echo "détail opérateur <br>";
            echo "<textarea cols='40' rows='10' readonly> ";
            foreach ($_SESSION['operateur'] as $key => $value) {
                echo $key . " a " . $value . " numéros  ;";
            }
            echo "</textarea>";
        }
        echo "</div>";
        if (isset($_SESSION['operateur'])) {
            unset($_SESSION['operateur']);
        }
        if (isset($_SESSION['numb_correct'])) {
            unset($_SESSION['numb_correct']);
        }

        if (isset($_SESSION['numb_incorrect'])) {
            unset($_SESSION['numb_incorrect']);
        }

        if (isset($_SESSION['message_error'])) {
            unset($_SESSION['message_error']);
        }

        ?>
    </div>
</body>

</html>