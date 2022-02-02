<?php 
// Point: Générer deux points puis calculer et afficher 
// la distance entre les deux points.Un point est caractérisé 
// par son abscisse et  son Ordonnée. 

?>
<?php
function calcul_points($x1, $x2, $y1, $y2): float
{
    return sqrt(pow(($x1 - $x2), 2) + pow(($y1 - $y2), 2));
}
