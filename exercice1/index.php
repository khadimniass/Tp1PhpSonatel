<?php
include 'fonctions.php';

$p = perimentre(rand(1, 100));
echo "Le périmetre est : de $cote ", $p . '<br>';

$s = surface(rand(1, 50)) ;
echo "La surface : ". $s. '<br>';

$d = rand(1, 100);
echo "La diagonale ". diagonal($d) .'<br>';
