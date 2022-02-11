<?php
function est_premier($nombre): bool
{
    $cpt = 1;
    for ($i = 2; $i < $nombre; $i++) {
        if ($nombre % $i == 0) {
            $cpt++;
        }
    }
    return $cpt == 1;
}
// $n=113;
// if (est_premier($n)) {
//     echo "premier";
// }
// else {
//     echo "no p";
// }