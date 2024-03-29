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

<!--
    Si chiede di realizzare una sezione di un sito web che permetta di consultare l’elenco dei prodotti di una azienda e di
gestire le statistiche di visualizzazione dei singoli prodotti.
In particolare, le operazioni richieste sono le seguenti:

1. Creare un database con 2 tabelle in relazione 1 a molti per memorizzare le informazioni delle categorie di
prodotto dell’azienda e i dettagli dei relativi prodotti. La tabella categorie deve contenere il nome della
categoria e la tabella prodotti deve contenere le seguenti informazioni: nome, descrizione, prezzo, categoria.
2. Creare una pagina web con l’elenco di tutti i prodotti memorizzati nel sistema.
3. Nell’elenco del punto precedente aggiungere un collegamento ipertestuale ad una seconda pagina dinamica
in cui siano riportati tutti i dettagli del prodotto.
4. Gestire i dati statistici di visualizzazione dei prodotti: aggiungere un campo alla tabella prodotti che venga
incrementato ogni volta che si accede alla pagina di dettaglio di un prodotto.
5. Aggiungere nella pagina dell’elenco dei prodotti un filtro di ricerca di selezione della
-->

<body>
<?php 
//print_r($_REQUEST);

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

        echo "<a href = './dettagli_prodotto.php?id= ". $prodotto['pro_id'] ." '>" . $prodotto['pro_nome'] . " " . $prodotto['cat_nome'] . "</a>" . "<br>";


    }


    ?>

</body>

</html>