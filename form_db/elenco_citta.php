<?php
include("./citta.php");


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
//selezionare le città di un'area geografica scelta nella pagina precedente

$dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try{
    $con = new PDO($dsn, "root", "");
    $sql="SELECT * FROM citta";
    $st= $con->prepare($sql);
    //qui il bind non serve
    $st->execute();
    $righe=$st->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e) {
        echo "Errore di connessione";
        echo $e->getMessage();
    }
//istanziare un nuovo oggetto di classe città per ogni citta selezionata
//se avessi già la classe farei un ciclo per l'elenco delle città
foreach($righe as $riga){
    $c=new Citta($riga['citta']);
    //stampare l'attributo nome dell'oggetto $c
    echo $c->getNome();
    echo "<br>";
}



?>
</body>
</html>