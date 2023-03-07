<?php
include("file_da_includere/conn_db.php");
include("include/funzioni_utili.php");


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
$cittas=fz_sql("SELECT * FROM citta");
foreach($cittas as $citta){
    echo $citta['citta']."<br>";
}

$prenotazioni= fz_sql("SELECT * FROM prenotazioni LIMIT 0,10");
elenca_records($prenotazioni, 'ID_prenotazione');

$nome_citta="Rimini";
$citta=fz_sql("SELECT* FROM citta WHERE citta= :$nome_citta",[['segnaposto'=>"nome_citta",'var'=>$nome_citta]]); //:per attivare il bind e fare il controllo su questa variabile
elenca_records($citta, 'citta');

?>
</body>
</html>
