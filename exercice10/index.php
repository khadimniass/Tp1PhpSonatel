<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exercice8/css/style.css">
    <title>N champ input</title>
</head>

<body>
    <p style="font-size: 3rem; text-align: center;">
        <em>Exercice 10 : </em> Le nombre N est saisi à l’aide d’un formulaire et on génère les N champs inputs . N est positif.
    </p>

    <div class="container">
        <p>veillez entrez un nombre positif</p>
        <form action="controller.php" method="post">
            <div class="field">
                <label for="N">N : </label>
                <input type="text" id="N" name="N" placeholder="entrez une valeur positive">
            </div>
            <div>
                <input class="btn" type="submit" name="btn_display" value="AFFICHER LES CHAMPS">
            </div>
        </form>
    </div>
</body>
</html>