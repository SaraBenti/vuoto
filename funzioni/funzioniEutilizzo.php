<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni e utilizzo</title>
</head>
<body>
    <?php
 @include("pippo.php");
 define("ENTE","Enaip Centro Zavatta");
 echo ENTE;


$a=1;

function verifica_password($s){
    $carattere_speciale="@";
    return true;
    //utilizzo di una variabile globale all'interno dell funzione per prendere 
    //una variabile al di fuori della funzione tramite la keyword global
    global $a;//att.ne ad usarla!
    
}

verifica_password("123pssword");
?>
</body>
</html>