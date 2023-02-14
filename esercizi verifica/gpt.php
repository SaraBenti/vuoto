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
function categoria_piu_frequente($arr, $key) {
    $valore = array();
    foreach ($arr as $a) {
        if (isset($a[$key])) {
            $value = $a[$key];
            if (isset($valore[$value])) {
                $valore[$value]++;
            } else {
                $valore[$value] = 1;
            }
        }
    }
    arsort($valore);
   
    foreach ($valore as $value => $count) {
        $cat_piu_frequentee = $value;
        break;
    }
    return $cat_piu_frequente;
}

// Esempio di utilizzo:
$domande = array(
    array('categoria'=>"commerciale",'risposta corretta'=>0),
    array('categoria'=>"assistenza",'risposta corretta'=>1),
    array('categoria'=>"assistenza",'risposta corretta'=>0),

);
$cat_piu_frequente = categoria_piu_frequente($domande, "categoria");
echo "L'età più frequente è: " . $cat_piu_frequente;
    ?>
</body>
</html>