<?php
/**Générer deux nombres puis faire 
leur permutation.On affichera les 
deux nombres avant et après permutations.*/
function permutateur($number1,$number2)
{
    $temp=$number1;
    $number1=$number2;
    $number2=$temp;
    return $number1." et ". $number2;
}

