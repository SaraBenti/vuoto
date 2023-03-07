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

    function connessione($sql)
    {
        $records = []; // inizializzando il risultato del return come array vuoto in caso di problemi tutto funziona e 
        //potremmo mettere un echo al posto del die
        $dsn = "mysql:dbname=ifts;host=127.0.0.1";
        //estrarre al db tutti i dati della regione $regione
        try {
            $connessione = new PDO($dsn, "root", "");

            //preparazione della query
            $st = $connessione->prepare($sql);

            //bind
    
            //esecuzione della query
            $st->execute();

            //restituzione dei record
            $records = $st->fetchAll(PDO::FETCH_ASSOC); //$regioni rappresenta un array associativo
    
        } catch (PDOException $e) {
            die("Errore di connessione" . $e->getMessage()); //message è privata e quindi bisogna richiamare il get
            // si creano metodi pubblici con una prop privata che possano permettere di fornire il contenuto della prop
            //privata tramite appunto get e set
            //nel caso fosse stata pubblica per richiamare il messaggio
            //$e->message;
        }
        return $records;
    }



    //funzione che estrae all'interno dell'array $regioni la regione che mi interessa
    function fz_regione($r, $regioni)
    {
        foreach ($regioni as $regione) {
            if ($regione['regione'] == $r) {
                return $regione;
            }
        }
        return []; //array vuoto nel caso non ci sia il nome della regione
        //array vuoto è sinonimo di false
    }
    $regione = "Lazio";
    $risultato = fz_regione($regione, $regioni);
    //print_r($risultato);
    if ($risultato) { //se array è vuoto allora false e non entro
        echo "trovata regione " . $regione . "con area geografica " . $risultato['area_geografica'];
    } else {
        echo "regione non trovata";
    }

    $regioni = connessione("SELECT * FROM regioni");

    ?>
</body>

</html>