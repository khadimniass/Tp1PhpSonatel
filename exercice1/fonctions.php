<?php
function perimentre($cote)
{
    return 4 * $cote;
}

function surface($cote)
{
    return $cote * $cote;
}

function diagonal($cote)
{
    return sqrt(2 * $cote * $cote);
    // return hypot($cote, $cote);
}
