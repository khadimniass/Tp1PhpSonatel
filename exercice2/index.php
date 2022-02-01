<?php
include 'fonctions.php';
while ($long < $large); {
    $long = rand(1, 100);
    $large = rand(1, 100);
}
// echo "longueur : " . $long . "<br>";
// echo "large : " . $large;

$p=perimetre($long, $large);
printf("perimetre  :  ".$p."<br>");

$s=surface($long, $large);
echo "la surface est : ".$s ."<br>";

$d=diagonal($long, $large);
print_r("la diagonale de $long et $large est : ".$d);