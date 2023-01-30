<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabili</title>
</head>

<body>
    <?php
    $var1 = 1; //var1 è il nome della cella di memoria, con l'uguale assegniamo il contenuto della variabile, è un operatore
    echo $var1; //in questo momento la var1 contiene la stringa "1" e stampo 1 
    $var1 = "stringa";
    echo $var1;
    echo "<br>"; //oppure mettere all'interno di "stringa <br>" oppure echo "$var1 <br> $var2";
    $var2 = "pippo";

    //echo "$var1 ciao <br> $var2" le virgolette sostituiscono il contenuto di var1
    //echo 'ciao a tutti $var1' il singolo apice non sostituisce il contenuto di var1
    echo 'la variabile $var1 =';
    echo $var1;
    // il carattere \ toglie valore al carattere dopo (senza spazi) ► echo ' \' ciao sono io... ►legge 'ciao sono io
    echo "simbolo speciale \" ";
        // simbolo per concatenare due stringhe è il .
        // echo 'la variabile $var1 = '."var1"; anche il punto è un operatore
    
        //per casa: assegnare ad una variabile la stringa "andare a casa!" 
        //scrivere in una sola echo
        //l'insegnante dice "è ora di (contenuto della variabile)"

    echo "<hr>";
    $s = "andare " . " a"." casa!";
    echo "1)l’insegnante dice che \"è ora di $s\"";
    echo "<br>";
    echo "2) l'insegnante dice \"è ora di ".$s."\"";
    echo "<br>";
    echo '3) l\'insegnante dice "è ora di '.$s. '"';

 


    ?>


</body>

</html>