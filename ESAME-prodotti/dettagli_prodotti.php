<?php
include_once("./file_da_includere/conn_db.php");

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

 $id = $_REQUEST["id"];

 $binds[0]=['segnaposto'=> 'id', 'var'=>$id];
 $sql="SELECT * FROM prodotti INNER JOIN categorie
 ON pro_cat_id=cat_id WHERE pro_id=:id";

 $prodotti=fz_sql($sql,$binds);
print_r($prodotti);

foreach($prodotti as $prodotto){
    echo "categoria: ". $prodotto['cat_nome']."<br>"
    .$prodotto['pro_nome']."<br>"
    .number_format($prodotto['pro_prezzo'],2,",",".")."&euro;"."<br>";
}

?>


</body>
</html>