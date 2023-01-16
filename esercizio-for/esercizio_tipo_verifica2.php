<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio tipo verifica 2</title>
</head>

<body>
    <?php
echo date ("d m y") . "<br>";
$d = date ("d");
$y = date ("y");
$inizio =10;
$ripetizioni = 10;
$bc1 = "#ccc";
$bc2 = "#fff";
$numero_iterazioni = 0;
$multipli=0;
for ($i=$inizio; ($i>0) and ($i<($inizio+$ripetizioni)) and ($i<$y);$i++){
    if ($i%2==0){
        $bc = $bc1;
    }
    else {
        $bc = $bc2;
    }
    echo "<div style='background-color:$bc'>";
    echo $i-1 . "-";
    if ($i%10==0){
        $multipli++;
    }
    echo "<span style='color:red'>";
    if ($i==$d){
        echo "<strong>";
        echo $i;
        echo "</strong>";
    }
    else{
        echo $i;
    }
    echo "</span>";
    echo "-" . $i+1;
    if ($i%10==0){
        $multipli++;
    }
    echo "</div>";
    if ($i%10==0){
        $multipli++;
    }
}
echo "<hr>";
echo '$inizio è ='. $inizio . "<br>";
echo '$ripetizioni è ='. $ripetizioni . "<br>";
echo "l'ultimo numero considerato è " . --$i . "<br>";
echo "i multipli di 10 sono " . $multipli;








        ?>
</body>