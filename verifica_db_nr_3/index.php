<?php
include("./conn_db.php");
include("./funzioni_utili.php");


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
    $data_partenza = fz_sql("SELECT partenza FROM prenotazioni");
    elenca_records($data_partenza, 'partenza');
    echo "<br>";
    echo "il numero totale delle prenotazioni è: " . count($data_partenza);

    $ultimo_partito = fz_sql("SELECT partenza,MAX(partenza),nome,cognome FROM clienti
inner JOIN prenotazioni ON id_cliente=prenotazioni.cliente group by partenza limit 0,1");
    echo "<br>";
    echo elenca_records($ultimo_partito, 'cognome') . elenca_records($ultimo_partito, 'nome');


    $giorni_permanenza = fz_sql("SELECT SUM(giorni_permanenza)as totale from prenotazioni;");
    echo "il numero dei giorni totali delle prenotazioni è: ".elenca_records($giorni_permanenza,'totale');
 

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
        function partenzaInAnnoCorrente(){
            if(getAnno($this->partenza)==date("Y")
            return true;
        }return false;
     
    }  
        
    }


    ?>

</body>

</html>