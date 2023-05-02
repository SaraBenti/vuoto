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

function autenticazione(){
    if (! $_SESSION){
        header("Location:index.php");//questo fa il redirect nel caso non sia stato fatto il login
    }
}

function date2user($date){
    $d=explode("-",$date);
    Sgiorno=explode(" ",$d[2]);
    return "$giorno[0]/{$d[1]}/{$d[0]}";

}

?>