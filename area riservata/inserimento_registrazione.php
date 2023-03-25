<?php 
include_once("./file_da_includere/conn_db.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserimento registrazione</title>
</head>
<body>
    <?php
    print_r($_REQUEST);
    var_dump($_FILES);

    //funzione per spostare il file caricato
    //array bidimensionale in cui vogliamo prendere la chiave icona e dentro a icona tmp name
    //spostiamo il file nella cartella img CARTELLAAAAAAA
    foreach($_FILES as $k=>$file){
        $from=$file['tmp_name'];//metodi uguali questo e quello del $to
        $to="./img/".$_FILES[$k]['name'];
        if(!move_uploaded_file($from,$to)){
            echo "errore nell'upload del file $k";
        };//restituisce booleano
    }
   // echo "<img src='$to'>";

//crea su php myadmin una nuova tabella
//nome tabella : utenti
//numero campi: 7
//crea
//ute_id  int 11  Indice(velocizza la ricerca perchè mi permette di dare una collocazione ai record)=primary(
//    perchè è una chiave primaria)    AI=logga
//ute_nome varchar 50
//ute_cognome varchar 50
//ute_email varchar 150 indice=unique
//ute_password varchar 20 indice=index
//ute_icona (o si memorizza il file binario ma occupa molto spazio;normalmente si usa il nome del file )
//varchar 100 null=logga
//ute_cv varchar 100 null=logga
//salva

//inseriamo il record
$sql="INSERT INTO utenti (ute_nome,ute_cognome, ute_email, ute_password, ute_icona, ute_cv)
    VALUES (:nome, :cognome,:email, :password, :icona, :cv)";
$bind=[
    ['segnaposto'=>"nome",'var'=>$_REQUEST['nome']],
    ['segnaposto'=>"cognome",'var'=>$_REQUEST['cognome']]

];
fz_sql($sql,$bind);

//da finire
    ?>
</body>
</html>