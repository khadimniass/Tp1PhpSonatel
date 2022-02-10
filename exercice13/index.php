<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement de text</title>
</head>

<body>
    <form action="controller.php" method="post">
        <label for="text"></label>
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="btn-textarea" value="ENVOYER">
    </form>

    <?php 
       
        if ($_SESSION['Test']) { ?>
        <textarea name="" id="" cols="30" rows="10" readonly>
            <?php echo rtrim($_SESSION['post']['text']); ?>
        </textarea>
        <?php
        }

        if ($_SESSION['post']) {
            unset($_SESSION['post']);
        }
        if ($_SESSION['Test']) {
            unset($_SESSION['Test']);
            // suprimer tout ce qu'il contient
        }
        ?>
   
</body>

</html>