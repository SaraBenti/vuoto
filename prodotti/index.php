<?php
include_once("./file_da_includere/conn_db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco prodotti</title>
</head>

<body>
<?php 
print_r($_REQUEST);

$binds = [];
$sql="SELECT * FROM prodotti INNER JOIN categorie ON pro_cat_id=cat_id";

if( isset ($_REQUEST['cat_id'])){
$cat_id=$_REQUEST['cat_id'];
if($cat_id != "tutto"){
    $sql .= " WHERE cat_id=:cat_id  ";
    $binds[] = ['segnaposto' => "cat_id", 'var' => $cat_id];
}
}

?>
<form method="POST" > <!--non metto l'action perchè di default è la stessa pagina -->
<select name="cat_id" >
    <option value="tutto" >Tuttte le categorie</option>
    <?php   
   $categorie= fz_sql("SELECT * FROM categorie");
   foreach($categorie as $categoria){
    $selected="";
if($categoria['cat_id']==$cat_id){
    $selected= "selected";
}

    echo "<option $selected value='{$categoria['cat_id']}'>{$categoria['cat_nome']}</option>";
   }
    
    
    ?>

</select>
<input type="submit" value="CERCA">
</form>

<br>
<br>



<?php


    $prodotti = fz_sql($sql, $binds);
    //print_r($prodotti);
    
    foreach ($prodotti as $prodotto) {

        echo "<a href = './dettagli_prodotto.php?id=" . $prodotto['pro_id'] . "'>" . $prodotto['pro_nome'] . " " . $prodotto['cat_nome'] . "</a>" . "<br>";


    }


    ?>

</body>

</html>