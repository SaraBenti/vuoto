<?php
include_once("./conn_db.php");
include_once("./funzioni_utili.php");
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
$regione=$_REQUEST['regione'];
$sql="INSERT INTO regioni (regione) VALUES (:regione)";
$binds[]= ['segnaposto'=> 'regione', 'var'=> $regione];

$inserisci=fz_sql($sql, $binds);

header("Location: index.php");
?>
</body>
</html>