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
    <title>Form utenti</title>
</head>

<body>
    <?php
    /**
     * Si chiede di realizzare una sezione di un sito web che permetta di consultare 
     * l’elenco degli utenti, memorizzati nel database “ifts”.
     *In particolare, le operazioni richieste sono le seguenti:
     *1. Indicare il numero di record presenti nella tabella utenti.
     *2. Creare un form con 2 campi: email e password
     *3. Selezionare dalla tabella utenti i record che hanno nei campi users e password
     *quelli inseriti nel form precedente.
     *4. Se nel punto precedente è stato selezionato almeno un record, scrivere il nome,
     *cognome dei record selezionati
     *5. Inserire un link sui record del punto 4 alla pagina ./cambio_password.php passando
     *l’id del record.
     */
    $record_utenti = fz_sql("SELECT * FROM utenti");
    echo "il tot.dei record della tabella utenti è: " . count($record_utenti)."<br>";
    ?>
    Form - email e password
    <form action="campi_email_password.php" method="POST">
    Email<input type="mail" name="ute_email" value=" <?php 
       if(array_key_exists('ute_email',$_POST))
       echo $_POST['ute_email']; 
       ?>"> 
    Password<input type="text" name="ute_password" value="<?php 
    if(array_key_exists('ute_password',$_POST))
    echo $_POST['ute_password'];
     ?>">
       <button>Inserisci</button>
    </form>

</body>

</html>