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

if(isset($_REQUEST['ID_regione'])){

    $id=$_REQUEST['ID_regione'];
}
$sql="SELECT * FROM regioni INNER JOIN citta ON citta.regione=regioni.ID_regione
 WHERE ID_regione=:id";
$binds[]=['segnaposto'=> 'id', 'var'=> $id];

$regione=fz_sql($sql,$binds);
foreach($regione as $r){
    echo '<table style="width:60%" border="1px solid black"><tr><td>'."Area geografica: " .$r['area_geografica']
    ."<tr><td>"."Provincia: " .$r['provincia_nome']
    ."<tr><td>"."Città: ".$r['citta']."<br></td></tr></table>";
}
?>

Inserimento nuova regione 
<form action="inserimento_nuova_regione.php" method="POST">
    <input type="text" name="regione"
    value="<?php
    if(array_key_exists('regione', $_GET)){
        echo $_GET['regione'];
    }
    ?>
    ">
    <button>Inserisci</button>
</form>

</body>
</html>