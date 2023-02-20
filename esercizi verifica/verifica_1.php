<?php

/**
 * funzione fatturato_totale restituisce la somma del fatturato
 * @param $array, $chiave
 * @return $somma
 */
function fatturato_totale($array, $chiave)
{
    $somma = 0;
    foreach ($array as $a) {
        if (array_key_exists($chiave, $a)) {
            $somma += $a[$chiave];
        }
    }
    return $somma;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica 1</title>
</head>

<body>
    <?php
    $categoria1 = ['nome' => "calzature", 'n_prodotti' => 20, 'fatturato' => 1200];
    $categoria2 = ['nome' => "camicie", 'n_prodotti' => 12, 'fatturato' => 800];
    $categoria3 = ['nome' => "pantaloni", 'n_prodotti' => 5, 'fatturato' => 650];
    $categorie = [$categoria1, $categoria2, $categoria3];
    $somma = 0;
    $max = 0;
    $nome_categoria = "";
    //elencare i nomi delle categorie
    foreach ($categorie as $categoria) {
        echo $categoria['nome'] . "<br>";

        //calcolare il numero totale di prodotti
        $somma += $categoria['n_prodotti'];

        //indicare la categoria con il fatturato più alto
        if ($max < $categoria['fatturato']) {
            $max = $categoria['fatturato'];
            $nome_categoria = $categoria['nome'];
        }
    }
    //funzione che restituisce il fatturato totale
    $totale_fatturato = fatturato_totale($categorie, 'fatturato');

    //definire il fatturato medio
    $numero_prodotti = count($categorie);
    echo "il fatturato medio è " . number_format(($totale_fatturato / $numero_prodotti), 2, ",", ".") . "<br>";

    echo "il numero totale dei prodotti è " . $somma . "<br>";
    echo "il prodotto " . $nome_categoria . " ha il fatturato più alto pari a " . $max . "<br>";
    echo "il fatturato totale è " . $totale_fatturato . "<br>";

    //aggiungere in fondo ad ogni array di categorie un elemento con chiave 'anno' e valore l'anno corrente(date)
    foreach ($categorie as $k => $categoria) {
        $categorie[$k]['anno'] = date('Y');
    }
    //creare un array con un elemento per ogni anno di attività sapendo che l'azienda è aperta da 10 anni
    // ogni elemento deve avere chiave l'anno di competenza e valore il fatturato di ogni anno 
    // che è cresciuto di 100 euro all'anno

    $fatturato = [];
    $data = date('Y');
    for ($i = 1; $i < 10; $i++) {

        $fatturato[$data] = $totale_fatturato;
        $data = $data - 1;
        $totale_fatturato = $totale_fatturato - 100;
    }
    var_dump($fatturato);
    ?>
</body>

</html>