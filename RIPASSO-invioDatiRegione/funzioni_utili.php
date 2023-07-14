<?php
function elenca_records($records,$chiave){//records è l'array ricevuto dalla fz_connessione
    foreach($records as $record){
        echo $record[$chiave]."<br>";
    }
}

function elenca_chiavi_records($records,$chiavi){// qui $chiavi è un array
    foreach($records as $record){
        foreach($chiavi as $chiave){
            echo $record[$chiavi]."<br>";

        }
    }
}

function data_db_2_user($data){
    //$data = "1990-12-31";
    $anno = substr($data, 0, 4);
    $mese = substr($data,5,2);
    $giorno = substr($data,8,2);
    return $giorno."/".$mese."/".$anno;
}
function getAnno($data){
    //$data = "1990-12-31";
    $anno = substr($data, 0, 4);
    return $anno;
}


/**
 * Descrizione della funzione
 * @param mixed $name
 * @return mixed
 */


/**
 * Restituisce un colore in base al giorno della settimana
 * @param 
 * @return string
 */
function colore(){
    $w=date ("w"); //giorno della settimana da 0 domenica a 6
    $colore= "";
    switch($w){
        case 1: $colore="#ff0000";break;//1 corrisponde a lunedi
        case 2: $colore="#00ffff";break;//martedì
        case 3: $colore="#00ff00";break;
        case 4: $colore="#0000ff";break;
        case 5: $colore="#ffff00";break;
        case 6: $colore="#ff00ff";break;
        default:
        $colore="#000000";//domenica
    }
    return $colore;
}


/**
 * funzione che riceve un parametro in ingresso e restituisce il minimo
 * @param array $a
 * @return $min minimo dei valori letti nell'array
 */

 function min_in_array($a){ //isset cerca se quel valore è inizializzato($min)
    foreach ($a as $v){
        if  (! isset($min)){//entro solo alla prima iterazione
            //non è settata se è la prima iterazione
          $min=$v;//metto in min il primo valore
        }
        if ($min>$v){
            $min=$v;
        }
    }
    return $min;
}
//questa funzione è abbastanza generica sia per dati numerici, che per stringhe

?>