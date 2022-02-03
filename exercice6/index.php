<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>acceil second derges</title>
    <style>
        .content {
            margin-top: 10vh;
            height: 50vh;
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="form.html.php">formulaire de calcul</a>
    </div>
        <h2>a = <?php echo $_POST['a']; ?> </h2>
        <h2>b = <?php echo $_POST['b']; ?> </h2>
        <h2>c = <?php echo $_POST['c']; ?> </h2>
        <?php
        include 'fonctions.php';
        if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c'])) {
            second_degre($_POST['a'], $_POST['b'], $_POST['c']) . "\n";
        } else {
            echo "veilez remplir tous les champ !\n";
        }
        ?>
</body>

</html>