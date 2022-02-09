<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exercice8/css/style.css">
    <title>EXERXICE 11</title>
<style>

</style>
</head>
<body>
    <div class="container">
        <p>veillez entrez un nombre positif</p>
        <form action="controller.php" method="post">
            <div class="field">
                <label for="N">NOMBRE </label><br>
                <input type="text" id="N" name="N" placeholder="entrez une valeur positive">
            </div>
            <div>
                <input class="btn" type="submit" name="btn_display" value="VALIDER">
            </div>
        </form>
    </div>
</body>

</html>