<?php
function perimetre($longueur, $largeur)
{
    return 2*($longueur+$largeur);
}

function surface($long, $large)
{
    return $long*$large;
}
 
function diagonal($L,$l)
 {
    //  return hypot($L,$l);
     return sqrt($L*$L + $l*$l);
 }