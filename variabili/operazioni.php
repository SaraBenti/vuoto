<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operazioni</title>
</head>

<body>
    <?php
    //SOMMA
    $a = 10;
    $b = 2;
    $c = $a + $b;
    //echo '$c=' . $c;
    echo '$a + $b = $c <br>';
    echo "$a + $b = $c";
    //si può scrivere il risultato di un'operazione senza memorizzarlo in una variabile 
    echo "<br>";
    echo $a + $b;
    echo "<br>";
    echo $a * $b;
    echo "<br>";
    echo "$a * $b =" . $a * $b; //dare priorità agli operatori come in matematica quindi questa stringa sarebbe "$a * $b =" . ($a * $b)
echo "<br>";
    $s = "stringa";
    echo $s . $a;
    echo "<br>";
    //modulo è un operatore che si rappresenta con il % ed è il resto intero di una divisione cioè 5 % 2 vale 1 (il risultato intero è 1)
    // modulo praticamente è fare pari e dispari perchè un numero pari è perfettamente divisibile e un numero dispari ha resto 1
echo $a != $b; //restituisce 1 che significa che è vero (!= significa diverso)
echo "<br>";
echo $a == $b; //risultato booleano falso che non dà nulla
echo "<br>";
//echo $a = $b; //$b viene assegnato alla variabile a e d'ora in poi $a vale 2
echo "<br>";

//operatore ternario
echo "a = $a e b= $b";
    echo "<br>";
    $risultato = ($a >= $b ? "a maggiore di b" : "b maggiore di a");
    echo $risultato;
    echo "<br>";
    $risultato = ($a >= $b ? ( $a==$b? "a uguale b" : "a maggiore di b") : "b maggiore di a"); 
    echo $risultato;
    echo "<br>";
//media
    echo ($a + $b) / 2;
    echo "<br>";
    //invertire $a e $b
echo "prima a = $a e b = $b <br>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "dopo a = $a e b = $b <br>";
    echo "<br>";
    //operatore ++ e -- : il ++ coincide con l'incremento di un'unità di una singola variabile (e non 2 variabili come per il +)
echo "prima a = $a <br>";
   // $a++; //$a = $a+1   $a++ restituisce a e POI lo incrementa; ++$a prima incrementa a e restituisce il valore già incrementato 
    echo "dopo a = ". $a++;
    echo "a = $a";
    echo "<br>";

    echo "dopo a = " . ++$a;
    echo "a = $a";
    echo "<br>";
    //operatori logici uniscono due valori logici cioè danno un risultato booleano; è vero se è vera la prima e la seconda condizione 
    $x = 100;
    $compreso = ($x >= $a) && ($x <= $b); //si può usare anche AND
    echo $compreso ? "x compreso" : "x non compreso"; //$compreso è una variabile che non uso più e quindi posso fare → (($x >= $a)AND ($x <= $b))? "x compreso" : "x non compreso";

    echo "<br>";
    //OR ||
    $nome1 = "mario";
    $nome2 = "giuseppe";
    $nome = "Mario";

    $nome_corretto = (($nome == $nome1) or ($nome == $nome2)) ? "nome corretto" : "nome non corretto";
    echo $nome_corretto;
  
    
    ?>


</body>

</html>