<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
</head>

<body>
    <?php
    /*for($i=1;$i<=10;$i++){
        echo "$i)ciao <br>"; //inserire $i) mi dà il numero delle iterazioni e me le scrive
    }
    echo "i=$i";
    echo "<br>";
    //voglio sapere se i è multiplo di 2

 for($i=1; $i<=10; $i++){
    echo $i;
    if (($i%2)==1){
        echo "non";
    }
        echo "multiplo di 2 <br>"; //inserire $i) mi dà il numero delle iterazioni e me le scrive
    }
    echo "i=$i";*/

    for($i=1; $i<=10; $i++){
       
            if (($i%2)==1){
            echo "<p style=background-color:#ccc>";
            echo "$i non";
            }else {
            echo "<p style=background-color:#fff>";
            echo "$i"; 
            }
        }
        echo "multiplo di 2";
    echo "</p>";

    echo "<hr>";
    //contare i multipli di 3 da 1 a 10
    $multipli = 0; //quanti multipli ho trovato? lo 0 è il valore di partenza perchè ancora non ce ne sono
    for ($i = 1; $i <= 10; $i++) {
        //$i%3==1 questo significa che non è multiplo
        //$i%3 significa la stessa cosa di mettere ==1
        //io lo voglio multiplo quindi devo negare quello scritto sopra !()
        if (! ($i % 3) ) // è multiplo
                        {
            echo "$i: trovato multiplo di 3 <br>";
            $multipli++;
        }

    }  
        echo " i multiplo da 1 a 10 sono $multipli";

 //contare i multipli di 3 da $inizio a $fine

   $multipli = 0;
    $inizio = 1;
    $fine = 10;
    for ($i = $inizio; $i <= $fine; $i++) {
        //$i%3==1 questo significa che non è multiplo
        //$i%3 significa la stessa cosa di mettere ==1
        //io lo voglio multiplo quindi devo negare quello scritto sopra !()
        if (! ($i % 3) ) // è multiplo
                        {
            echo "$i: trovato multiplo di 3 <br>";
            $multipli++;
        }

    }  
        echo " i multiplo da $inizio a $fine sono $multipli";
    echo "<hr>";
 //elencare i primi 10 numeri multipli di 3 da 1 a 100
 //mettere le variabili al posto dei numeri: elencare i primi $numeri multipli di $multiplo da $inizio a $fine
    $inizio = 1;
    $fine = 1;
    $num = 0;
    $numeri = 11;

    for ($i = $inizio; $i <= $fine; $i++) {
        if (!($i % 3)) { //oppure $i%3==0
            echo "$num) $i <br>";
        }

    }
?>
