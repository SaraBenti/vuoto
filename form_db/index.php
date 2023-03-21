<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try{
    $con = new PDO($dsn, "root", "");
    $sql="SELECT DISTINCT (area_geografica) FROM regioni";
    $st= $con->prepare($sql);
    //qui il bind non serve
    $st->execute();
    $righe=$st->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e) {
        echo "Errore di connessione";
        echo $e->getMessage();
    }
    ?>
Seleziona l'area geografica
<!--rendere dinamico questo form-->
<form action="elenco_citta.php" method="POST"> 
    <select name="area_geografica" > <!--proprietà name è quella che interessa nel server side-->
        <?php 
        foreach($righe as $riga){
            echo "<option >".$riga['area_geografica']."</option>";
        }
        
        ?>
    </select>
    <button >OK</button>



</form>
</body>
</html>