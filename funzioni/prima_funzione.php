<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funzione 1</title>
</head>
<body>
    <?php
function mia_somma($a,$b){
        $ris = $a + $b;
        return $ris;
        echo "ciao";//non viene mai eseguito perchè dopo il return
}


    $r = mia_somma(1, 2);
    echo $r;

    



?>
</body>
</html>