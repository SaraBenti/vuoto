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
    <title>Document</title>
</head>
<body>
    <?php
foreach ($_POST as $k=>$v){
   
        echo "<br>". $k.": ".$v;
}
    ?>
    Elenco utenti appena inseriti: id ultimo inserito
    <?php
     $ute_email=$_REQUEST['ute_email'];
     $ute_password=$_REQUEST['ute_password'];
     $bind=[['segnaposto'=>":ute_email",'var'=>$ute_email],
     ['segnaposto'=>":ute_password",'var'=>$ute_password]];
$utente=fz_sql("INSERT INTO utenti (ute_email,ute_password) VALUES (:ute_email, :ute_password)",
$bind);
$id=fz_sql("SELECT ute_id FROM utenti order by ute_id desc limit 0,1");
foreach ($id as $record){
    echo $record['ute_id'];
}

echo "<a href='cambio_password.php?ute_id=".$record ['ute_id']."'>
    Clicca per cambiare password </a><br>";
    ?>
</body>
</html>