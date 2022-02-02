<?php

function somme(int $a, int $b): int
{
    return $a + $b;
}
function exponentiel(int $number)
{
    $fact = 1;
    if ($number == 0 || $number == 1) {
        return 1;
    }

    for ($i = 1; $i <= $number; $i++) {
        $fact = $fact * $i;
    }
}
return $fact;

function difference($a, $b)
{
    return somme($a, -$b);
}

function produit(float $a, float $b): float
{
    return $a * $b;
}
function modulo(int $n, int $m) : int
{
    $cpt=0;
    while ($n<=$m) {
        $n=$n-$m;
        $cpt++;
    }
   return $n-$m*$cpt;
}
function division($x, $y)
{
    if ($y == 0) {
        return 'Impossible de diviser par zéro.';
    }
    return $x / $y;
}

function carre(int $numb) : int
{
    // return $numb;
    return pow($numb, 2);
}
echo exponentiel(5);
