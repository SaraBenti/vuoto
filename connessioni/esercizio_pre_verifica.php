<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio pre-verifica</title>
</head>
<body>
    <?php
$dsn="mysql:dbname=ifts; host=127.0.0.1";
try{
    //1
    $con=new PDO($dsn,"root","");
    echo "connessione effettuata";

    //2
    $sql="SELECT citta FROM citta";
    $st=$con->prepare($sql);
   
    $st->execute();

    $righe=$st->fetchAll(PDO::FETCH_ASSOC);

    //4
    $sql1="SELECT provincia_sigla FROM citta";
    $st1=$con->prepare($sql1);
   
    $st1->execute();

    $righe1=$st1->fetchAll(PDO::FETCH_ASSOC);

    //5
    $sql2="SELECT citta,regioni.regione FROM citta
    INNER JOIN regioni ON regioni.ID_regione=citta.regione";
    $st2=$con->prepare($sql2);

    $st2->execute();

    $righe2=$st2->fetchAll(PDO::FETCH_ASSOC);


}catch (PDOException $e) {
    echo "Errore di connessione";
    echo $e->getMessage();
}
// echo "<pre>";
//     var_dump($righe);
//     echo "</pre>";

    $numero_righe=count($righe);
    echo "<br>il numero delle città è ".$numero_righe;

// echo "<pre>";
//     var_dump($righe1);
//     echo "</pre>";

foreach ($righe1 as $key=>$value){
    if(!isset($max)){
        $max=$value['provincia_sigla'];
    }
    if($max<$value['provincia_sigla']){
        $max=$value['provincia_sigla'];
    }
}
echo "<br>la provincia con più città collegate è ".$max;

// echo "<pre>";
//     var_dump($righe2);
//     echo "</pre>";
$regione_da_contare="Sicilia";
$numero_volte=0;
foreach($righe2 as $regione){
    if($regione==$regione_da_contare){
        $numero_volte++;
    }
}
echo $numero_volte;
?>
</body>
</html>