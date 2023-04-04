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
$id=$_GET['ID_regione'];
//echo $id;
$dsn = "mysql:dbname=ifts;host=127.0.0.1";
try{
$con = new PDO($dsn, "root", "");
$sql="SELECT citta FROM citta 
INNER JOIN regioni ON regioni.ID_regione=citta.regione
 WHERE ID_regione=:id";
$st= $con->prepare($sql);
$st->bindParam("id", $id);
$st->execute();
$righe=$st->fetchAll(PDO::FETCH_ASSOC);
}catch (PDOException $e) {
    echo "Errore di connessione";
    echo $e->getMessage();
}
//print_r($righe);
foreach($righe as $riga){
    echo $riga['citta']."<br>";
}


?>
   Inserimento di una nuova regione dell'area geografica 
    <form method=GET action="inserimento_nuova_regione.php">
       Nome<input type="text" name="regione" value="<?php 
       if(array_key_exists('regione',$_GET))
       echo $_GET['regione']; 
       ?>"> 
    
       <button>Inserisci</button>
    </form>

</body>
</html>