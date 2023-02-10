<?php

function min_in_array($a){ 
    foreach ($a as $v){
        if  (! isset($min)){//entro solo alla prima iterazione
            //non è settata se è la prima iterazione
          $min=$v;//metto in min il primo valore
        }
        if ($min>$v){
            $min=$v;
        }
    }
    return $min;
}
//questa funzione è abbastanza generica sia per dati numerici, che per stringhe
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // scrivere una funzione che riceve come parametro di ingresso 

   $a=["primo", "asecondo", "terzo"];
   $primo = min_in_array($a);
   echo "il primo è: " . $primo;


   //definire la funzione somma2 che somma 2 decimali
   //definire la funzione 3 che somma 3 numeri usando la somma 2 

function somma2($x,$y){
    return $x+$y;
}
echo "<br> somma2= " .somma2(1.2,1.3);
function somma3($a, $b, $c){
    //return somma2($a,$b)+$c;
   
    return somma2(somma2($a,$b),$c);
}
function media2($x,$y){
    return ($x+$y)/2;
}

$n=somma2(1.2,1.3);
 echo number_format($n,2,",", ".");
    ?>
</body>
</html>