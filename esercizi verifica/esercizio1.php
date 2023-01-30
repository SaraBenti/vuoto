<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1</title>
</head>
<body>
    <?php
$partecipanti=rand(10,30);
$punteggi=[];
for($i=0;$i<($partecipanti-5);$i++){
    $punteggi[$i]=rand(0,10);
}

print_r($punteggi);
echo "<br>";
echo "<ul>";
$lista=0;
$posti=5;
$possibili_assunti=0;
$somma=0;
$num=0;
$minimo=10;
$min=0;
$max=0;
$col1="#ccc";
$col2="#fff";
for ($i=0; $i<count($punteggi);$i++){
    if ($i%2==0){
        $col=$col1;
    }
    else{
        $col=$col2;
    }
    
    echo "<li><div style='background-color:$col'>";
    if ($punteggi[$i]>5){
        echo "<strong>" . $punteggi[$i] . "</strong></li><br>";
    }
    else{
        echo "<i>" . $punteggi[$i] . "</i></li><br>";
    }
    if ($punteggi[$i]==10){
        $max++;
    }
    if ($punteggi[$i]<$minimo){
        $min=$punteggi[$i];
        $min==0;
    }
    echo $min++;
    if ($punteggi[$i]<6){
        $somma+=$punteggi[$i];
        $num++;
        $media=$somma/$num;
    }
    if ($punteggi[$i]>=8){
        $possibili_assunti++;
        $lista=($possibili_assunti - $posti)/100;
    }

}
echo"</ul>";
echo "<table border=1><tr><td>";
echo "il punteggio massimo è stato dato " . $max." volte<br>";
echo "il punteggio più basso è stato dato ". $min. " volte<br>";
echo "la media dei bocciati è ".$media. "<br>";
echo "i possibili assunti sono ". $possibili_assunti. "<br>";
echo "in lista di attesa sono ". $lista;
echo "</td></tr></table>";
    ?>
    
</body>
</html>