<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Pagina con sessione 

    <?php
//creazione di un area di memorizzazione dei dati della sessione
//memorizziamo il nome
$nome= "sara";

$_SESSION['nome']=$nome;
print_r($_SESSION);




?>
</body>
</html>