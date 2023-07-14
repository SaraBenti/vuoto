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

?>
<form method="POST">
    <select name="cat_id" >
        <option value="all">Seleziona</option>

<?php
//selected con tutte le opzioni delle categorie
$sql="SELECT * FROM categorie";
$categorie=fz_sql($sql);
foreach($categorie as $categoria){
    $selected="";
    if($categoria['cat_id']==$cat_id){
        $selected="selected";
    }
    echo "<option $selected value='{$categoria['cat_id']}'>{$categoria['cat_nome']}</option>";
}
?>

    </select>
    <input type="submit" value="CERCA">
</form>
<?php

//elenco prodotti presi per id selezionato e link che rimanda a dettagli
$binds=[];
$sql2="SELECT * FROM prodotti INNER JOIN categorie ON pro_cat_id=cat_id";

if(isset($_REQUEST['cat_id'])){
    $cat_id=$_REQUEST['cat_id'];
    if($cat_id !="all"){

        $sql2="SELECT * FROM prodotti INNER JOIN categorie ON pro_cat_id=cat_id WHERE cat_id=:cat_id";
        $binds[]=['segnaposto'=>"cat_id", 'var'=>$cat_id];
    }
}
$prodotti=fz_sql($sql2,$binds);
foreach($prodotti as $prodotto){
   // echo "<a href = './dettagli_prodotto.php?id= "
    // . $prodotto['pro_id'] ." '>" 
   // . $prodotto['pro_nome'] 
   // . " " 
   // . $prodotto['cat_nome'] 
   // . "</a>" 
   // . "<br>";
    
    
    
    echo "<a href= './dettagli_prodotti.php?id= " .$prodotto['pro_id']
     . "'<ul><li>"
     .$prodotto['pro_nome']
     ." → "
     .$prodotto['cat_nome']
     ."</li></ul/></a> "
     ."<br>";
}

print_r($prodotto['cat_id']);

?>





    
</body>
</html>