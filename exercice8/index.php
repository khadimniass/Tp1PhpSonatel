<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>N positif</title>
</head>

<body>

    <p style="font-size: 3rem; text-align: center;">
        Entrer un nombre N à l’aide d’un formulaire puis générer une liste ul dont les li affichent toutes les valeurs entre 1 et N. N est positif.
    </p>
    <div class="container">
        <p>veillez entrez un nombre positif</p>
        <form action="controller.php" method="post">
            <div class="field">
                <label for="N">N : </label>
                <input type="text" id="N" name="N" placeholder="entrez une valeur positive">
            </div>
            <div>
                <input class="btn" type="submit" name="btn_display" value="AFFICHER">
            </div>
        </form> 
    </div>
    <div class="list-puce">
       
    </div>
</body>
</html>