<?php

/**
 * funzione fatturato_totale che restituisce la somma degli elementi di una data chiave
 * @param $array $chiave
 * @return $somma
 */
Function fatturato_totale($categorie,$chiave){

    $somma_elementi=0;
    foreach($categorie as $categoria){
        if (! isset($elemento)){
            $elemento=$categoria[$chiave];
        }
        $elemento=$categoria[$chiave];
        $somma_elementi+= $elemento;

    
    }
    return $somma_elementi;
}




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
$categoria1=['nome'=>"calzature",'n_prodotti'=>20,'fatturato'=>1200];
$categoria2=['nome'=>"camicie",'n_prodotti'=>12,'fatturato'=>800];
$categoria3=['nome'=>"pantaloni",'n_prodotti'=>5,'fatturato'=>650];
$categorie=[$categoria1, $categoria2, $categoria3];

//punto 1
foreach($categorie as $categoria){
        echo $categoria['nome']."<br>";
    
}
//punto 2
$somma_elementi=0;
foreach($categorie as $categoria){
    if (!isset($elemento)){
        $elemento=$categoria['n_prodotti'];
    }
    $elemento=$categoria['n_prodotti'];
       $somma_elementi+= $elemento;

    
}
echo $somma_elementi;

//punto 3
foreach($categorie as $k=>$categoria){
    if(! isset($max_fatturato)){
    $max_fatturato=$categoria['fatturato'];
   $chiave=$categoria['nome'];
    }
    if ($max_fatturato<$categoria['fatturato']){
        $max_fatturato=$categoria['fatturato'];
       $chiave=$categoria['nome'];
    }
}
echo "la categoria con il fatturato più alto (".$max_fatturato." euro) è ".$chiave."<br>";

//punto 4
$fatturato_totale=fatturato_totale($categorie,'fatturato');
echo "il fatturato totale è ".$fatturato_totale. "<br>";

//punto 5
$numero_categorie=count($categoria);
$fatturato_medio=$fatturato_totale/$numero_categorie;

echo "il fatturato medio è ".number_format($fatturato_medio,2,",", ".");
echo "<br>";

//punto 6
$anno= date("Y");
echo $anno;
foreach($categorie as $c=>$categoria){
    $categoria['anno'] = date("Y");
    }


//punto 7
$array=array();
$chiave=0;
$val=0;
$valore=$fatturato_totale;
$anno= date("Y");
for ($i=0;$i<=10;$i++){
    $chiave=$anno-1;
    $val=$valore-100;
    $array=[$chiave=>$val];
}
var_dump($array);

   


?>
</body>
</html>