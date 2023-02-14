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
$domanda1=array('categoria'=>"commerciale",'risposta corretta'=>0);
$domanda2=array('categoria'=>"assistenza",'risposta corretta'=>1);
$domanda3=array('categoria'=>"assistenza",'risposta corretta'=>0);
$domande=[$domanda1, $domanda2, $domanda3];

//elenco categorie senza ripetizioni
$elenco_categorie=array();
$conteggio_risposte_corrette=0;
foreach($domande as $domanda){    
        $elenco_categorie[]=$domanda['categoria'];    
            if($domanda['risposta corretta']==1){
                $conteggio_risposte_corrette++;
            }       
}
//var_dump($elenco_categorie);
$elenco_categorie=array_unique($elenco_categorie);
//var_dump($elenco_categorie);
foreach($elenco_categorie as $e){
    echo "categoria ".$e."<br>";   
}
echo "le risposte corrette sono ".$conteggio_risposte_corrette;

//creo un array che contenga tutte le categorie
$tipo_categorie=array();
foreach($domande as $domanda){
    if (isset($domanda['categoria'])){
       $valore_categorie=$domanda['categoria'];
       if(isset($tipo_categorie[$valore_categorie])){
            $tipo_categorie[$valore_categorie]++;
       }
    }else{
        $tipo_categorie[$valore_categorie]=1;
    }
}
var_dump($tipo_categorie);
arsort($tipo_categorie);
$categoria_piu_frequente=0;
foreach($tipo_categorie as $chiave=>$valore){
    $categoria_piu_frequente=$chiave;
    break;
}
echo "<br>";
echo $categoria_piu_frequente;
    ?>
</body>
</html>