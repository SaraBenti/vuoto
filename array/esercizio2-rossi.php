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

//copio le categorie in un array


/**
 * restituisco la categoria più utilizzata
 * @param array $domande
 * @return string
 */
$elenco_categorie=array();
function most_used($domande)
foreach($domande as $domanda){
    if(key_exists($domanda['categoria'],$elenco_categoria)){
        
    }
}


?>
</body>
</html>