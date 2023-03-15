<?php
/*a*/
function CifPar($n)
{
    $even_count = 0;
    $odd_count = 0;
    while ($n > 0)
    {
        $rem = $n % 10;
        if ($rem % 2 == 0)
            $even_count++;
        else
            $odd_count++;
        $n = (int)($n / 10);
    }
    echo("Numărul cifrelor pare a numărului este: " .
             $even_count."<br>");
}
$n = $_POST['numar'];
$t = CifPar($n);
/*b*/ 
function SumaCif($n)
{
    $s=0;
    while($n!=0)
    {
        $s=$s+$n%10;
        $n=$n/10;
    }
    return $s;
}

$a=$_POST['numar'];
echo "Suma cifrelor numărului este ".SumaCif($a)."<br>";
/*c*/
function smallest_digit($n){
    $min=$n%10;
    $n = (int)($n / 10);
    while ($n > 0){
         if($min>$n%10)
         $min=$n%10;
         $n = (int)($n / 10);
    }
echo ("Cifra minima a numărului este: " .$min);
}

$n = $_POST['numar'];
$m=smallest_digit($n);

?>