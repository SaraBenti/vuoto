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
$domanda2=array('categoria'=>"commerciale",'risposta corretta'=>1);
$domanda3=array('categoria'=>"assistenza",'risposta corretta'=>0);
$domande=[$domanda1, $domanda2, $domanda3];

//1)elenco categorie senza ripetizioni
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
//2)
foreach($elenco_categorie as $e){
    echo "categoria ".$e."<br>";   
}
echo "le risposte corrette sono ".$conteggio_risposte_corrette."<br>";
//3)
//creo un array che elenca tutte le categorie e il numero di volte (che diventa il valore)
/**
 * @param mixed array
 * @return array
 */
Function tipo_categorie($k,$domande){

$tipo_categorie=array();
foreach($domande as $domanda){
    if (key_exists($domanda[$k],$tipo_categorie)){
            $tipo_categorie[$domanda[$k]]++;
       
    }else{
        $tipo_categorie[$domanda[$k]]=1;
    }
}
return $tipo_categorie;
}


$categorie=tipo_categorie('categoria',$domande);
var_dump($categorie);
echo "<br>";
/**
 * cerco il valore ripetuto più volte di una chiave
 * @param array
 * @return $max_cat
 */

 function max_chiave($array){
    foreach($array as $k=>$val){
        if(! isset($max)){
        $max=$val;
        $max_cat=$k;
        }
        if ($max<$val){
            $max=$val;
            $max_cat=$k;
        }
    }
    return $max_cat;
 }
$max_cat= max_chiave($categorie);
echo "il valore della chiave categoria più ripetuto è ".$max_cat."<br>";

//4)
/**
 * cerco quante volte è ripetuto il valore più ripetuto di un array
 * @param array
 * @return $array
 */

 

    ?>
</body>
</html>