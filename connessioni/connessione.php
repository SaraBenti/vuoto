<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connessione

    </title>
</head>

<body>
    <?php
    //connessione database
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //possiamo inserire un codice che può lanciare un'eccezione: guarda php.net
        //1 passaggio: connessione cioè istanza di un nuovo oggetto
        $con = new PDO($dsn, "root", "");
        echo "connessione effettuata";
        //2 passaggio :prepara lo statement(query);$st sarà diverso per ogni query
        $sql = "SELECT* FROM citta 
            INNER JOIN regioni ON regioni.ID_regione=citta.regione
             WHERE area_geografica='Sud'";
        $st = $con->prepare($sql); // dentro il metodo prepare c'è il modo per restituire l'oggetto 
        echo "statement preparato";
        //3 bind - da fare
        //$st è un oggetto della classe PDOStatement
        //4 passaggio: eseguo lo statement preparato quindi si prende l'oggetto e si chiama execute
        $st->execute();
        echo "statement eseguito";
        //5 fetch=metodo dello statement è il fetch per ottenere l'elenco dei dati richiesti(solo con select); $righe sarà un array con tutti i dati
        //$righe = $st->fetchAll(PDO::FETCH_ASSOC); // mi restituisce l'array bidimensionale
        
        $sql1="INSERT INTO regioni(regione,area_geografica)
        VALUES ('test2','sud')";
        $st1=$con->prepare($sql1);
        echo "secondo statement preparato";
        $st1->execute();
        echo "secondo statement eseguito";

        $sql2="SELECT* FROM regioni";
        $st2=$con->prepare($sql2);
        $st2->execute();
        $righe=$st2->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Errore di connessione";
        echo $e->getMessage();
    }
    //esiste la possibilità che dei metodi, funzioni, istanze possano creare delle eccezioni
    //quando si presenta un errore il programma si blocca
    //per segnalare la presenza di eccezioni si lanciano queste eccezioni e devono essere catturate dall'istruzione catch
    //try=prova ad eseguire il codice e se c'è un'eccezione l'esecuzione si blocca e si passa direttamente al catch
    //catch è autocompilato 
    //l'eccezione al PDO ci può essere per vari motivi che creano un errore di connessione


    //se tutto è andato bene $righe contiene l'array bidimensionale dei record estratti
    echo "<pre>";
    var_dump($righe);
    echo "</pre>";

    //per casa
    //query di insert sulla tabella regioni 
    //poi la delete della stessa regione: metodo di PDOStatement che restituisce l'id del record appena inserito
    ?>
</body>

</html>