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



?>