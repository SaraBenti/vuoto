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
    try {
        $regione = $_REQUEST['regione'];

        $con = new PDO($dsn, "root", "");
        $sql = "INSERT INTO regioni (regione) VALUES (:regione)";
        $st = $con->prepare($sql);
        //bind
    
        $st->bindParam('regione', $regione);
        $st->execute();

    } catch (PDOException $e) {
        echo "Errore di connessione";
        echo $e->getMessage();
    }
    header("Location: index.php");
    ?>
</body>

</html>