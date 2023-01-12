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

    ?>