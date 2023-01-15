<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi</title>
</head>

<body>
    <?php
//1)
$a = 15;
$b = 8;
$media = ($a + $b) /2;
echo $media;
echo "<hr>";
//2)
$x = 30;
if ($x%3==0) {
    echo "$x è multiplo di 3";
}
else{
    echo "$x non è multiplo di 3";
}
echo "<hr>";
//3)
$x=30;
$y=15;
$z=$x;
$x=$y;
$y=$z;
echo $x ;
echo "<br>";
echo $y;
echo "<hr>";
//4)
$f1 = 7;
$f2 = 9;
if ($f1>$f2) {
    echo $f1 - $f2;
}
else {
    echo $f2 - $f1;
}
echo "<hr>";
//5)
$numero = 15;
if ($numero>10){
    if ($numero<=20){
        echo "$numero è nella seconda decina";
    }
    if ($numero>21){
        if ($numero<30){
            echo "$numero è nella terza decina";
        }
    }
}
echo "<hr>";
//6)
$corso = 8;
$durata = 105;
$settimane= $durata / $corso;
if ($durata%$corso ==0){
    echo $settimane;
}
else{
    echo ++$settimane;
}
echo "<hr>";
//7)
$nome = "Maria";
$cognome = "Rossi";
if ($nome>$cognome){
    echo $nome;
}
else {
    echo $cognome;
}
echo "<hr>";
//8)
$testo = "C";
if ($testo>=65){
    if ($testo<=90){
        echo "la prima lettera è maiuscola";
    }
    else {
        if ($testo>=97){
            if ($testo<=122){
                echo "la prima lettera è minuscola";
            }
        }
    }
    echo "la prima lettera è minuscola";
}
echo "<hr>";
//9)
$x = 10;
$a = 9;
$b = 11;
if ($a<$b){
    if ($x<$b){
        if ($x>$a){
            echo "$x è compreso";
        }
    }
}//non è finito fare con switch
echo "<hr>";
//cicli 7)
$inizio = 10;
$fine = 100;
$num_dispari=10;
for ($i=$inizio; ($i>=$inizio)and($i<=$fine);$i++){
   if ($i%2==0){
    echo "$i è pari" . "<br>"; 
   }
   else {
    echo "$i è dispari" . "<br>";
  
    }
   }
   for ($cont_dispari=$num_dispari; $cont_dispari<=($num_dispari+20); $cont_dispari++){
       if ($cont_dispari%2==1){
           echo $cont_dispari . "<br>" ;
    } 
else {
    "condizione falsa";
}
   }

    ?>