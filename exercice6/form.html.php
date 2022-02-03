<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {}

        .content {
            display: flex;
            margin-top: 10vh;
            height: 50vh;
            width: 50vh;
            margin-left: auto;
            margin-right: auto;
            background-color: #ccc;
            border-radius: 30px;
        }

        h2 {
            margin-left: 20%;
        }

        form {
            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;

        }

        .champ {
            padding-top: 5%;
            border-radius: 10px;
            height: 2vh;
        }

        .cellule {
            padding-top: 2vh;
        }

        .btn {
            width: 80%;
            height: 4vh;
            margin-left: 14%;
            background-color: white;
            color: green;
            border-radius: 5px;
            font-size: 1.5rem;
        }

        .btn:hover {
            color: red;
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>saisi des donnees pour second degres</title>
</head>

<body>
    <div class="content">
        <form action="index.php" method="POST">
            <h2>ax²+bx+c=0</h2>
            <div class="cellule">
                <label for="a">a : </label>
                <input class="champ" id="a" name="a" type="number" placeholder="           ax²+bx+c=0">
            </div>

            <div class="cellule">
                <label for="b">b : </label>
                <input class="champ" id="b" name="b" type="number" placeholder="           ax²+bx+c=0">
            </div>

            <div class="cellule">
                <label for="c">c : </label>
                <input class="champ" id="c" name="c" type="number" placeholder="           ax²+bx+c=0">
            </div>

            <div class="cellule ">
                <input class="btn" type="submit" value="calculer">
            </div>
        </form>
    </div>
</body>

</html>