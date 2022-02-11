<?php
include 'fonctions.php';
$num1=rand(1,100);
$num2=rand(1,100);
print("les nombres avant avant permutations : <br>");
echo "nombre 1 :",$num1.": <br>";
echo "nombre 2 :",$num2.": <br>";
echo "apres permutation".": <br>";
echo permutateur($num1,$num2) . "<br>";