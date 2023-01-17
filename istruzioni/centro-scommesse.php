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
//il cliente del centro scommesse sceglie un numero $numero e scommette che è uguale alla media di $estrazioni
//numeri casuali da 1 a 10; verificare se il cliente ha vinto
   
   $numero = 2;
   $estrazioni = 5;
   $somma = 0; //parte da 0 e si aggiorna dopo ogni ciclo sommando
   for($i=0; $i< $estrazioni;$i++){
       $r=rand(1, 10) . " "; //calcolare la somma per ogni interazione(il valore neutro della somma è 0, della moltiplicazione 1)
       echo $r . " ";
       $somma = $r + $somma; //in questo modo si aggiorna il nuovo numero con ogni numero random ed è uguale a scrivere
       //$somma=$somma+$r che è uguale $somma+=$r
    }
   echo "<br>somma = $somma";
   $media = $somma / $estrazioni;
   echo "<br>media = $media";
   $media_intera = ($somma - ($somma % $estrazioni)) / $estrazioni; //questa è la funzione per togliere il resto alla somma e renderla divisibile perfettamente per il numero di estrazioni
    echo "<br>media intera= $media_intera";
   if ($media_intera==$numero){
        echo "<br>hai vinto";
    }
    else{
       echo "<br>ritenta";
    }
   ?>

</body>
</html>