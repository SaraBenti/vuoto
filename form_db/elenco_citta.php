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
    
    print_r($_POST);

    if ($_POST)
        $area_geografica = $_POST['area_geografica']; //$_REQUEST sia per post che per get
    else
        $area_geografica = "Sud";
    //operazione ternario
//$area_geografica = ($_POST) ? $_POST['area geografica] : "Sud";
    echo "<h1> elenco delle città dell'area geografica " . $area_geografica . "</h1>";

   

    //<!-- facciamo un link dove inserire una citta selezionando una regione--> 
    echo "<a href='form_nuova_regione.php?area_geografica=$area_geografica'>
        Aggiungi regione di quest'area geografica </a><br>";
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        $con = new PDO($dsn, "root", "");
        $sql = "SELECT * FROM citta JOIN regioni ON id_regione=regione WHERE area_geografica= :area_geografica";
        //quando abbiamo una variabile dinamica serve sempre il bind
        $st = $con->prepare($sql);

        //bind segnaposto con :
        $st->bindParam("area_geografica", $area_geografica); //ogni volta che c'è un dato variabile di cui non ho certezza
    
        $st->execute();
        $righe = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Errore di connessione";
        echo $e->getMessage();
    }
    //istanziare un nuovo oggetto di classe città per ogni citta selezionata
//se avessi già la classe farei un ciclo per l'elenco delle città
    foreach ($righe as $riga) {
        $c = new Citta($riga['citta']);
        //stampare l'attributo nome dell'oggetto $c
        echo $c->getNome();
        echo "<br>";
    }



    ?>
</body>

</html>