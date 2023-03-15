<?php 
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
while ($a!=$b)
{
    if($a>$b)
    $a=$a-$b;
    else
    $b=$b-$a;
}
while ($a!=$c)
{
    if($a>$c)
    $a=$a-$c;
    else
    $c=$c-$a;
}
echo "Cel mai mare divizor comun a numerelor este $a";
?>