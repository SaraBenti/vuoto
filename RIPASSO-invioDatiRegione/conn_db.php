<?php

function fz_connessione()
{ //non restituisce nulla ma lo scopo è solo quello di valorizzare $con
    global $con;
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        $con = new PDO($dsn, "root", ""); //qui c'è la valorizzazione di $con


    } catch (PDOException $e) {
        echo "Errore di connessione";
        echo $e->getMessage();
    }

}

function fz_sql($sql, $binds = [])
{ //per separare connessione e statement
    global $con; //globalizzo la stessa variabile sia qui che in connessione
    if (!isset($con)) { //controlliamo se $con è stata valorizzata
        //nel caso non sia settata $con
        fz_connessione();
    }
    $st = $con->prepare($sql);

    foreach ($binds as $bind) {

        $st->bindParam($bind['segnaposto'], $bind['var']);
    }
    //$st->bindParam(':sigla_provincia', $nome_citta, PDO::PARAM_STR);
    $st->execute();
    //5. fetch - recupero dei dati estratti (solo con select)
    $righe = $st->fetchAll(PDO::FETCH_ASSOC);
    return $righe;
}


?>