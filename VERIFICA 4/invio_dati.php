<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invio Dati</title>
</head>

<body>
    <?php
    
    // print_r($_GET);
    foreach ($_GET as $k => $v) {
        if ($k == 'nome') {
            $nome = "%" . $v . "%";
        }

    }

    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        $con = new PDO($dsn, "root", "");
        $sql = "SELECT * FROM regioni WHERE regione like :nome or area_geografica
    like :nome";
    //quando ho il bind segno la variabile non con $variabile ma con :variabile
        $st = $con->prepare($sql);
        $st->bindParam("nome", $nome);//a differenza del bind value(che prende il valore)il param sostituisce il segnaposto con il contenuto
        //della variabile
        //il terzo argomento del bind è il tipo che di default è stringa
        $st->execute();
        $righe = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Errore di connessione";
        echo $e->getMessage();
    }
    // print_r($righe);
    foreach ($righe as $k => $riga) {
        $dato1 = $riga['regione'];
        $dato2 = $riga['ID_regione'];
        echo "<a href='regione.php?ID_regione=" . $dato2 . "'>
    $dato1 </a><br>";
    }
    //echo $dato2;
    



    ?>
</body>

</html>