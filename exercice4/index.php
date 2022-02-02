<?php
include 'fonctions.php';
$num1=rand(1,100);
$num2=rand(1,100);
print("les nombres avant avant permutations : \n");
echo "nombre 1 :",$num1.": \n";
echo "nombre 2 :",$num2.": \n";
echo "apres permutation".": \n";
echo permutateur($num1,$num2);
echo "\n";
