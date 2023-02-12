<?php

/**
 * funzione massimo numero o stringa di un array
 * 
 * @param array $domande, $k
 * @return $categoria_piu_utilizzata
 */







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

$domanda1=['categoria'=>"commerciale", 'risposta_corretta'=>0];
$domanda2=['categoria'=>"assistenza", 'risposta_corretta'=>1];
$domanda3=['categoria'=>"assistenza", 'risposta_corretta'=>0];
$domande=[$domanda1, $domanda2, $domanda3];
$corrette=0;
foreach ($domande as $domanda){
    foreach ($domanda as $k=>$d){
        echo $k."=>". $d."<br>";
        
        if($d==1){
            ++$corrette;
        }        
    }
}


echo "le risposte corrette sono nr. ".$corrette. "<br>";


$unico= array_values($domanda);
var_dump($unico);

?>
</body>
</html>