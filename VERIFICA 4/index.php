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
    <title>Form nome</title>
</head>

<body>
    <h1>Form</h1>
    <form action="invio_dati.php" method="GET">
        <fieldset>
            <legend>Dati </legend>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
            <button type="submit">Invia Dati</button>
        </fieldset>



</body>

</html>