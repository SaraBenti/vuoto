<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio tipo verifica</title>
</head>

<body>
    <?php
   // $inizio = 10;
   // for ($i=1;$i<=5; $i++) { //$i è la partenza; 
        //la condizione vera è che $i sia<= di 5 e quindi scrivo il valore di i incrementato
    //    echo $i;
   // }
    
   // $numero_iterazioni = 0; //per scrivere il numero di iterazioni creo una variabile
   // for($i=10; $i>=6; $i--){ //caso di decremento invece che incremento;
        //la condizione vera si può scrivere anche $i>5
    //    echo $i; //in totale 5 iterazioni(ripetizioni) e quindi alla fine ciclo $i=5
    //    $numero_iterazioni++;
    //    echo " " . ($numero_iterazioni);
     //   echo "<br>";
  //  }

   // echo "<hr>";
    //echo '$numero_iterazioni:' . "'$numero_iterazioni'"; //apice singolo non risolve il contenuto della variabile
   // echo "<hr>";

    $start = 10;
    $numero_iterazioni = 0;
    $bc1 = "#ccc";   //abbiamo scritto il tag html in div style
    $bc2 = "#fff";
    $repeat = 16;
    $numeri_pari = 0;
    for ($i=$start; ($i> ($start - $repeat)) && ($i>=0) ; $i--){ //continua a ciclare finche start-repeat 
        $bc = $bc1; //se lasciamo questo possiamo omettere else e mettere nell'if $bc=$bc2
        if ($i%2==0) {  //se $i è pari; per mettere la condizione dispari $i%2==1 che si scrive anche solo $i%2
            $bc = $bc1;
        }
        else {
            $bc = $bc2;
        }
        echo "<div style= 'background-color:$bc'>";
        echo $i;
        echo "-" . "<span style='color:red'>" . ($i*2) . "</span>"; //scrivere di fianco il doppio
        echo "</div>";
        $numero_iterazioni++;
       
        if ($i%2==0){
            $numeri_pari++;
        }
    }
    echo "<hr>";
    echo '$numero_iterazioni:' . "'$numero_iterazioni'";
    echo "<hr>";
    echo "i numeri pari sono " . ($numeri_pari + $numero_iterazioni); //altrimenti inserire dopo l'if $numeri_pari++
    ?>
</body>