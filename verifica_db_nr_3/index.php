<?php
include_once("./conn_db.php");
include_once("./funzioni_utili.php");


?>


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
    /**
     * Utilizzare almeno una funzione a scelta e rappresentare le date nel formato
     *dd/mm/aaaa
     *Si chiede di realizzare una sezione di un sito web che permetta di consultare i dati
     *memorizzati nel database ifts.
     *In particolare, le operazioni richieste sono le seguenti:
     *1. Collegarsi al database ifts
     *2. Elencare la data di arrivo di tutte le prenotazioni e il numero totale di prenotazioni
     *3. Scrivere il nome e cognome dell’ultimo cliente arrivato
     *4. Calcolare qual è il totale dei giorni di permanenza di tutte le Prenotazioni
     *5. Definire la classe Prenotazione con le proprietà private data di arrivo e costo
     *giornaliero e i metodi necessari per assegnare e leggere il valore di queste proprietà.
     *6. Definire la funzione che, dati in ingresso un array di prenotazioni, restituisce il
     *numero di prenotazioni con la data di arrivo nell’anno corrente
     *oppure
     *Definire il metodo di Prenotazione che verifica se la prenotazione ha come data di
     *arrivo l’anno corrente
     *Opzionale: Elencare i clienti che hanno come data di arrivo il mese successivo ad oggi
     *degli ultimi 5 anni.
     */

    //elencare la data di arrivo delle prenotazioni e il nr totale di prenotazioni
    $data_arrivo = fz_sql("SELECT arrivo FROM prenotazioni");
    //elenca_records($data_arrivo, 'arrivo');
    echo "<br>";
    echo "il numero totale delle prenotazioni è: " . count($data_arrivo) . "<br>";

    //nome e cognome dell'ultimo cliente arrivato
    echo "L'ultimo cliente arrivato è ";
    $ultimo_arrivato = fz_sql("SELECT nome,cognome FROM clienti
    inner JOIN prenotazioni ON id_cliente=prenotazioni.cliente ORDER BY arrivo DESC limit 0,1");
    echo elenca_records($ultimo_arrivato, 'cognome') . elenca_records($ultimo_arrivato, 'nome');
    echo "<br>";

    //giorni permanenza
    $giorni_permanenza = fz_sql("SELECT giorni_permanenza from prenotazioni;");
    $totale_giorni_permanenza=0;
    foreach ($giorni_permanenza as $giorni){
        foreach($giorni as $giorno){
            $totale_giorni_permanenza++;
        }
    }
    echo "il totale dei giorni di permanenza è ". $totale_giorni_permanenza;


    class Prenotazione
    {
        private $partenza = "";
        private $importo = "";

        function __construct($partenza, $importo)
        {
            $this->partenza = $partenza;
            $this->importo = $importo;
        }
        function setPrenotazione()
        {
            $dsn = "mysql:dbname=ifts;host=127.0.0.1";
            try {
                $con = new PDO($dsn, "root", "");
                $sql = "SELECT * FROM prenotazioni WHERE partenza=$this->partenza
    AND importo=$this->importo";
                $st = $con->prepare($sql);
                //qui il bind non serve
                $st->execute();
                $righe = $st->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Errore di connessione";
                echo $e->getMessage();
            }
            return $righe;
        }

        function getPartenza()
        {
            return $this->partenza;
        }
        function getImporto()
        {
            return $this->importo;
        }
    }




    ?>

</body>

</html>