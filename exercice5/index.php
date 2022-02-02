<?php
include 'fonctions.php';

$abs1 = rand(-10, 10);
$abs2 = rand(-10, 10);

$ord1 = rand(-10, 10);
$ord2 = rand(-10, 10);

echo calcul_points($abs1, $abs2, $ord1, $ord2)."\n";