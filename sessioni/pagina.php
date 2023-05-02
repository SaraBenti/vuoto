<?php
session_start();
//le informazioni dell'utente rimangono memeorizzate il tempo della sessione


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
    //qualunque pagina può accedere a quell'informazione
    if (array_key_exists('utenteDelSito',$_COOKIE)){
        echo "Bentornato ";
    }else{
        echo "Benvenuto ";
    }
    if (array_key_exists('nome',$_SESSION))
        echo " ".$_SESSION['nome'];
    
    ?>
     nel mio sito!
</body>
</html>