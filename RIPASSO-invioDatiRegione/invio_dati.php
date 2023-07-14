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
print_r($_REQUEST);

foreach($_REQUEST as $k=>$v){
    if($k== 'nome'){
        $nome= "%".$v."%";
    }
}

$sql="SELECT * FROM regioni WHERE regione like :nome OR area_geografica like :nome ";
$binds[]=['segnaposto'=>'nome', 'var'=>$nome];
$regioni=fz_sql($sql,$binds);

foreach($regioni as $regione){
$name=$regione['regione'];
$id=$regione['ID_regione'];
echo "<a href= 'regione.php?ID_regione=".$id."'>$name </a><br>";
}
?>


</body>
</html>