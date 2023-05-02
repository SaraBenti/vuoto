 <?php
 //informazione che compare nella pagina dell'utente e va aggiungere l'informazione nell'header
 //quindi va inserita prima degli output html
 setcookie('utenteDelSito',1, time()+3600);//3600 è un'ora
 //con -1 non viene memorizzato
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
if (array_key_exists('utenteDelSito',$_COOKIE)){
    echo "Bentornato ";
}else{
    echo "Benvenuto ";
}
    ?>
    nel mio sito!
    <br></br>
    Ho inserito un cookie: elenco
    <?php
print_r($_COOKIE);
    ?>
 </body>
 </html>
 