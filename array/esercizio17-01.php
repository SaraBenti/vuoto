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
//inizializzo l'array $eta //per verificare se sto facendo bene l'inizializzazione c'è la funzione print_r oppure var_dump
//il ciclo per inizializzare lo lasciamo per primo e separat
$eta =[]; //questo è opzionale
for($i=0;$i<10;$i++){
        $eta[$i] = rand(0, 90); //ui sto dicendo prendi 10 elementi e dagli valore random
}
   // print_r($eta); //stampa ricorsiva, fa la stampa di tutti gli elementi dell'array
    var_dump($eta);

    //faccio il ciclo che conta tutti gli elementi dell'array
    $max = $eta[0]; //anche $max = 0 va bene 
    $neonati = 0;
    $eta_maggiorenni = 0;
    $numero_maggiorenni = 0;
    for ($i = 0; $i < count($eta); $i++) { //questo è il ciclo importante che parte da 0
        if ($eta[$i]>=18){
            $eta_maggiorenni += $eta[$i];  //calcolo il numero dei maggiorenni
            $numero_maggiorenni++;
            echo "<strong>";
            echo $eta[$i] ;
            echo "</strong>";
        }
        else {
        echo "<i>";
        $color="#000";
        if ($eta[$i]==0){
            $color='#f00';
        }
        echo"<span style='color:$color'>". $eta[$i] ."</span>";
        echo "</i>";
        }
        echo "<br>";
        //trova il più anziano
        if ($eta[$i]>$max){
            $max = $eta[$i];
        }
        //numero neonati
        if($eta[$i]==0){
            $neonati++; //= a $neonati = $neonati+1
        }
        
        
    }
    echo "<table border=1><tr><td>";
    echo "<br> Il più anziano ha $max anni(e si trova ad indice????)";
    echo "<br> Il numero dei neonati è $neonati ";
    echo "<br> L'età media dei maggiorenni è " . 
    (($numero_maggiorenni>=0) ?
    ($eta_maggiorenni / $numero_maggiorenni)
    : "non disponibile");
    echo "<br> Le schede per le elezioni sono $numero_maggiorenni";
    echo "</td></tr></table>";
    ?>
</body>
</html>