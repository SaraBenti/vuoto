<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi Natale</title>
</head>

<body>
    <?php

//calcolare il valore assoluto il risultato è $a
$x = 10;
if ($x >= 0) {
     $a = $x;
}
else {
    $a = $x * (-1);
}
echo "$a";

echo "<br>";
 //oppure se voglio fare il caso particolare del valore quando vale 0
if ($x > 0) {
        if ($x==0){
            echo '$a=0'; // l'apice scrive direttamente il valore rispetto alle virgolette che scrive $a=
        }
        $a = $x;
    }
    else {
        $a = $x * (-1);
    }
    echo "$a";

//esercizio supermercato
    $p1 = 10;
    $p2 = 9;
    $p3 = 8;
    echo "<br>";
    //trovare il minore dei 3 valori e togliere il 10%
    if ($p1 < $p2) {
        if ($p1 < $p3) {
          //  echo "$p1 minore";
          $p1 = $p1 - ($p1 * 10 / 100);
        } else
          //echo "$p3 minore";
          $p3 = $p3 - ($p3 * 10 / 100);
      } else {
        if ($p2 < $p3) {
          //echo "$p2 minore";
          $p2 = $p2 - ($p2 * 10 / 100);
        } else {
          //echo "$p3 minore";
          $p3 = $p3 - ($p3 * 10 / 100);
        }
      }
    
    echo '$p1=' . "$p1 <br>"; 
    echo '$p2=' . "$p2 <br>"; 
    echo '$p3=' . "$p3 <br>"; 
    //totale
    $totale = ($p1 + $p2+ $p3);
    echo "il totale vale:". $totale;
    echo "<br>";
    //scorporare l'iva
    $iva = 10;
    $imponibile = $totale / (1+ ($iva/100));
    echo "$imponibile";






    


?>