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



?>