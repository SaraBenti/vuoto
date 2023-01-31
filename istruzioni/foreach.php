<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
    $a = ['mario' => 3, 'giacomo' => 10, 'maria' => 10, 'simone' => 10, 'giuseppe' => 8, 'materia'=>"html", 'prof'=>""]; //gli indici hanno apice singolo
    $a ['coordinatore'] = "Sara Forlivesi";

    foreach($a as $chiave=>$val){
        echo "<br>[$chiave]=> $val";
    }
    echo "<hr>";

//esercizio: memorizzare in un array $risultato le chiavi 
//dell’array $a relative alle posizioni in cui è memorizzato il valore $val
//cioè chi ha preso 10?

//$v è valore dell'elemento considerato
//$k è chiave dell'elemento considerato
//$v e $a[$k] sono la stessa cosa
    $val = 10;
    $risultato =[];
foreach($a as $k=>$v){
    if ($v==$val){
        //trovato elemento da aggiungere in $risultato
        $risultato [] = $k; //aggiunge "in fondo "all'array
        //nuovo array dove i valori sono le chiavi di $a
        //$risultato va inizializzato perchè se l'if non è mai vero dà errore
    }

}
//assegno alla chiave prof il valore rossi se la materia è database
//il valore casadei se la materia è html

if ($a['materia']=="database"){
        $a['prof'] = "Rossi";
}else if($a['materia']=="html"){
        $a['prof'] = "Casadei";
}
echo "la materia". $a['materia']." insegnata da {$a['prof']} ha ottenuto questi risultati";
if ($risultato) {//se l'array contiene almeno un elemento
    echo "<br> contenuto di risultato";
    for ($i = 0; $i < count($risultato); $i++) {
        echo "<br>" . $risultato[$i];
    }
    foreach ($risultato as $r) { // stessa cosa del for sopra
        echo "<br>" . $r;
    }
} else{//se l'array è vuoto
    echo "<br>Nessun risultato";

}

    echo "<hr>";


   
?>
</body>
</html>