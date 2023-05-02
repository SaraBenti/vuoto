<?php
//crea una nuova sessione se non esistese
session_start();


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
    Pagina con sessione
    <?php

//creazione di un area di memorizzazione dei dati della sessione
//memorizziamo il nome
$nome='Mario';
$nome=$_GET['nome'];
$_SESSION['nome']=$nome;
echo "<hr>";

print_r($_SESSION);
?>
</body>
</html>