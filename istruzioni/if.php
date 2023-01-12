<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>

<body>
    <?php
    //non posso scrivere condizioni se non sono tra parentesi
    if (true) { //solo la condizione true viene presa in considerazione
        echo "condizione vera";
    } //else {
       // echo "condizione falsa";
    

    echo "<br>";
    $x = 1;
    $y = 2;

    if ($x > $y) {
        //condizione vera
        $m = $x;
    } else {
        //condizione falsa
        $m = $y;
    }
    echo "il max tra $x e $y è $m";

    echo "<br>";
    //se fossero uguali i numeri segnerebbe l'else
// else è opzionale
    $a = 3;
    $b = 3;
    if ($a >= $b) {
        //se l'interprete è qui significa che a maggiore o uguale a b
        if ($a==$b){
            echo "a uguale a b <br>";
        }
        echo "condizione vera";
        $m = $a;
    } else {
        echo "condizione falsa";
        $m = $b;
    }
        ?>


</body>

</html>