<?php

/**
 * funzione totale_persone restituisce la somma dei valori di una chiave in un array bidimensionale
 * @param $array,$chiave
 * @return $somma
 */
function totale_persone($array, $chiave)
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
    <title>Verifica 2</title>
</head>

<body>
    <?php
    $camera1 = ['nome' => "101", 'n_persone' => 60, 'incasso' => 8000];
    $camera2 = ['nome' => "102", 'n_persone' => 30, 'incasso' => 2000];
    $camera3 = ['nome' => "103", 'n_persone' => 50, 'incasso' => 6000];
    $camere = [$camera1, $camera2, $camera3];

    $totale_incasso = 0;
    $max = 0;
    $numero_camera = "";
    //elencare i nomi delle camere
    foreach ($camere as $camera) {
        echo $camera['nome'] . "<br>";
        //valore totale dell'incasso
        $totale_incasso += $camera['incasso'];
        //camera con l'incasso più alto
        if ($max < $camera['incasso']) {
            $max = $camera['incasso'];
            $numero_camera = $camera['nome'];
        }
    }
    //usare la funzione per calcolare la somma delle persone
    $somma = totale_persone($camere, 'n_persone');
    echo "il numero totale delle persone è " . $somma . "<br>";

    //calcolare la media delle persone
    $media = $somma / count($camere);
    echo "la media delle persone è " . $media . "<br>";

    echo "il valore totale dell'incasso è " . number_format($totale_incasso, 2, ",", ".") . "<br>";
    echo "la camera numero " . $numero_camera . " è quella con l'incasso più alto di " . $max . "<br>";

    //aggiungere un elemento per ogni array camera con chiave 'mese' e valore il mese corrente
    $mese = date('m');
    foreach ($camere as $k => $camera) {
        $camere[$k]['mese'] = $mese;
    }
    //var_dump($camere);

    //creare un array con un elemento per ogni mese di attività tenendo conto che l'hotel è aperto da un anno
    //chiave è il mese di competenza e valore l'incasso del mese tenendo conto che ogni mese 
    //l'incasso è cresciuto di 200
    $incassi = [];
    for ($i = $mese; $i < ($mese + 12); $i++) {
        $incassi[$mese] = $totale_incasso;
        $totale_incasso = $totale_incasso - 200;
        $mese = $mese - 1;
    }
    var_dump($incassi);

    //Fatal error: Allowed memory size of 536870912 bytes exhausted (tried to allocate 671088640 bytes) in C:\xampp\htdocs\php\esercizi verifica\verifica_2.php on line 72
    ?>
</body>

</html>