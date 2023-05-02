<?php
session_start();
include_once("include/funzioni_utili.php");
include_once("include/conn_db.php");
autenticazione();


echo "<br>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco clienti</title>
</head>
<body>
    ***RISERVATISSIMO***
    <br>
    Questo è l'elenco clienti <br>
    <?php
$sql="SELECT * FROM clienti ";
$clienti= fz_sql($sql);
foreach ($clienti as $cliente){
    echo $cliente['nome']. " ".$cliente['cognome']
    ." <a href= elenco_prenotazioni.php?id={$cliente['ID_cliente']}>prenotazioni </a>"
    ."<br>";
}

?>
</body>
</html>