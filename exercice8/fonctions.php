<?php
function is_positif(int|float $number): bool
{
    return ($number > 0 ) ? true : false;
}

function gen_number($number)
{
    for ($i = 1; $i <= $number; $i++) {
        echo "<li>". $i ."</li> \n";
    }
}