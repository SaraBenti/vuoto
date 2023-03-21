<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <?php
$dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try{
        $regione=$_REQUEST['regione'];
        $area_geografica=$_REQUEST['area_geografica'];
    $con = new PDO($dsn, "root", "");
    $sql="INSERT INTO regioni (regione,area_geografica) VALUES (:regione, :area_geografica)";
    $st= $con->prepare($sql);
    //bind
    $st->bindParam('area_geografica',$area_geografica);
    $st->bindParam('regione',$regione);
    $st->execute();
    // non ci serve la fetch $righe=$st->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e) {
        echo "Errore di connessione";
        echo $e->getMessage();
    }
    header("Location: index.php");//redirect dopo che ho fatto l'inserimento alla pagina index
    ?>
</body>
</html>