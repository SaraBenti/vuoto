<?php
setcookie('utenteDelSito', 1, time() + 3600);
//informazione che va nella pagina dell'utente e 
//va quindi inserita prima degli output html

//con -1 non viene memorizzata
//strumenti per sviluppatori→application→cookie

//voglio sapere se l'utente è già entrato nel mio sito e in quel caso dargli il bentornato

//e inseriamo il terzo parametro del tempo posso farlo scadere, se non viene settato diventa il tempo della sessione
//time() sono i secondi attuali  tempo in millisecondi
//unix timestamp= tempo in millisecondi a partire dal 1 gennaio 1970

//ogni browser gestisce in modo separato i cookie e quindi se apro un altro browser non me l'ha registrato

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
if(array_key_exists('utenteDelSito',$_COOKIE)){
    echo "bentornato";
}else{
    echo "benvenuto";
}

    ?>
nel mio sito!
<br>
Elenco cookie inseriti:
<?php
print_r($_COOKIE);
?>

</body>

</html>