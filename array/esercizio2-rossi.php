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
$domanda1=['categoria'=>"commerciale", 'risposta_corretta'=>0];
$domanda2=['categoria'=>"assistenza", 'risposta_corretta'=>1];
$domanda3=['categoria'=>"assistenza", 'risposta_corretta'=>0];
$domande=[$domanda1, $domanda2, $domanda3];

// 1. elencare le categorie delle domande (senza ripetizione!)
// uso array_unique per ripulirmi un array con tutte le chiavi che mi creo io
//copio le categorie in un array nuovo
    $elenco_categorie=array();
    foreach($domande as $domanda){
        //inserisco il corso in un array
        $elenco_categorie[]=$domanda['categoria'];
    }
//rimuovo le categorie duplicate
    $elenco_categorie=array_unique($elenco_categorie);
//-----------------------------------------------------------------------------------------

// 3. definire la funzione che ha come parametro d'ingresso l'array $domande e restituisce il
// nome della categoria più utilizzata;


/**
 * restituisce la categoria più utilizzata
 * @param array $domande
 * @return string
 */

    function most_used($domande){
        //invece che usare array_unique copio le categorie in un array
        //inizializzo l'array
        $elenco_categorie=array();

        foreach($domande as $domanda){
        //verifico se la domanda è già presente nell'array
        if(key_exists($domanda['categoria'],$elenco_categorie)){
            //la categoria esiste già, aumento i partecipanti
            $elenco_categorie[$domanda['categoria']]++;        
    }else{
        //la categoria non esiste, lo aggiungo all'array e inizializzo le domande a 1
        $elenco_categorie[$domanda['categoria']]=1;
    }
}
var_dump($elenco_categorie);
    //cerco la categoria che ha più domande
    $massimo=0;
    foreach($elenco_categorie as $key=>$value){
        if($value>$massimo){
            //il numero di domande è superiore al massimo, segno i valori
            $massimo=$value;
            $risultato=$key;
        }
    }
    return $risultato;
}

//richiamo la funzione
echo $risultato=most_used($domande);
echo "<br>";
//-----------------------------------------------------------------------------------------------

// 4. modificare la funzione del punto precedente in modo che restituisca anche il numero di volte
// che è stata utilizzata la categoria (N.B. una funzione può restituire 2 valori solo restituendo
// un array)
/**
 * Restituisce la categoria più utilizzata e il numero di volte che è stata utilizzata
 * 
 * @param array $domande
 * @return array $risultato
 */

 function most_used_2($domande){
    //inizializzo l'array
    $elenco_categorie=array();

    foreach($domande as $domanda){
        //verifico se il corso è già presente nell'array
        if(key_exists($domanda['categoria'],$elenco_categorie)){
            //la categoria esiste già, aumento i partecipanti
            $elenco_categorie[$domanda['categoria']]++;
        }else{
            //la categoria non esiste, lo aggiungo all'array e inizializzo a 1
            $elenco_categorie[$domanda['categoria']]=1;
        }
    }
//cerco la categoria che ha più domande
    $massimo=0;
    foreach($elenco_categorie as $key=>$value){
        if($value>$massimo){
            //il numero di domande è superiore al massimo, segno i valori
            $massimo=$value;
            $risultato['valore']=$massimo;
            $risultato['categoria']=$key;
        }
    }
    return $risultato;
 }
 var_dump(most_used_2($domande));
 echo "<br>";
 $risultato2=most_used_2($domande);
 echo "la categoria più utilizzata è ".$risultato. "usata volte ".$risultato2['valore'];
 //--------------------------------------------------------------------------------------------------

// 5. se ogni risposta alle domande costasse all'azienda 50 centesimi di euro, quanto sarebbe
// costato rispondere alle domande? (scrivere i numeri nel formato corretto!)
// basta moltiplicare x0,5

 $costo=0.5*count($domande);
 echo "l'azienda ha speso ".$costo;
 echo number_format($costo,1,",", ".");
?>
</body>
</html>