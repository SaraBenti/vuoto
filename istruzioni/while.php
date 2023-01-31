<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHILE</title>
</head>
<body>
    <?php
    //per casa somma dei soli numeri pari
    //for ($i = 1; $i <= 10;$i++){
    //    echo $i ."<br>";
    //}
    $i = 1;
    while($i<=10){
        echo $i++."<hr>"; //mettere la condizione che prima o poi diventa falsa
    }
    //scriviamo i primi numeri interi positivi a partire da $start ?
    //per cui la somma raggiunge il target $target
   // $target = 1000;
   // $somma=0;
   //$start=1
   // for ($i = $start;($somma<$target);$i++){
       // echo $i . "<br>";
      //  $somma = $somma + $i;
       //if($somma>=$target){
        //    break; //tendenzialmente non si usa il break
        //}
    //}
    //echo "somma= ".$somma;
    $start = 1;
    $somma = 0;
    $target=10;
    $i=$start-1;
    echo "inizio da " . ($i+1);
    while ($somma<$target){
        $i++;
        $somma+=$i;
       
    }
    echo " l'ultimo numero è ".($i-1). " la somma è ". $somma;
    //altrimenti per avere $i ultimo reale sposto $i++ alla riga sopra prima della somma
    // e inizializzo $i=0
  

        ?>
</body>
</html>