<?php
session_start();
include_once("include/funzioni_utili.php");
include_once("include/conn_db.php");
autenticazione();


echo "<br>";


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
    Elenco prenotazioni per singolo nome
<?php
$id="";
$binds=[];
$sql="SELECT * FROM prenotazioni ";
if (isset ($_GET ['id'])){
    $id=$_GET['id'];
    $binds=[['segnaposto'=>'id','var'=>$id]]
    $sql.= "WHERE cliente=:id" ; 
}
$prenotazioni= fz_sql($sql,[['segnaposto'=>'id','var'=>$id]]);
foreach ($prenotazioni as $prenotazione){
    echo date2user($prenotazione['arrivo']). " ".date2user($prenotazione['partenza'])
    ."<br>";
}
?>

</body>
</html>