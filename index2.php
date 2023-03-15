<?php 
/*a*/
$a=$_POST['numar'];
$b=$_POST['numar2'];
$c=$a * $b;
echo "Produsul numerelor $a si $b este $c"."<br>" ;
/*b*/
$a=$_POST['numar'];
$b=$_POST['numar2'];
if ($a>$b) $min1=$b;
else $min1=$a;
echo "Valoarea minima este $min1";
?>