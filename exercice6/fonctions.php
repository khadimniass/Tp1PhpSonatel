<?php

function delta($n1, $n2, $n3)
{
    return $n2 * $n2 - 4 * $n1 * $n3;
}

function second_degre($a, $b, $c)
{
    if ($a == 0) {
        echo "l'equation n'est pas du second degres car a est null\n";

        if ($b == 0) {
            if ($c == 0) {
                echo "infinité de solution ; ";
                echo "car vous avez mis tous les coefficients null \n";
            } else {              #c!=0
                echo "pas de solution \n";
            }
        } else {                  #b!=0
            $solution = -1 * $c / $b;
        }
    } else {  #a!=0
        $d = delta($a, $b, $c);
        if ($d < 0) {
            echo "pas de solution ";
            echo "car Le descriminents est négatif \n";
        } elseif ($d == 0) {
            echo "on a une solution : \n";
            echo "x0 = " . -1 * $b / 2 * $a . "\n";
        } else {
            echo "on a deux solutions : \n";
            echo "x1 = " . (-1 * $b - sqrt($d)) / 2 * $a . "\n";
            echo "et  \n";
            echo "x2 = " . (-1 * $b + sqrt($d)) / 2 * $a . "\n";
        }
    }
}

#second_degre(1,1,1);