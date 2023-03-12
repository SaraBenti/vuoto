<?php
include("file_da_includere/conn_db.php");
include("file_da_includere/funzioni_utili.php");
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
    $area_geografica="Sud";
$citta_del_sud=fz_sql("SELECT citta FROM citta INNER JOIN regioni ON regioni.ID_regione=citta.regione
WHERE area_geografica=:area_geografica",[['segnaposto'=>"area_geografica",'var'=>$area_geografica]]);

elenca_records($citta_del_sud,'citta');
echo "<br>";
echo "il numero delle città del Sud è: ".count($citta_del_sud);
foreach ($citta_del_sud as $key=>$value){
    if(!isset($max)){
        $max=$value['citta'];
    }
    if($max<$value['citta']){
        $max=$value['citta'];
    }
}
echo "<br>la città che c'è più volte è ".$max;

class Regione {
    private $nome="";
    public $nr_citta_collegate="";
}

?>
</body>
</html>