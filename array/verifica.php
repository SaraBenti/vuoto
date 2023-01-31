<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica</title>
</head>
<body>
    <?php
$voti = [];
$col1="#ccc";
$col2="#fff";
$suff=0;
$insuff=0;
$lode=0;
$min=101;
$volte_min=0;
$somma=0;
$posti= 15;
$corso=0;
$stud= rand(20,50);
for ($i=0; $i<$stud; $i++){ //nella condizione devo togliere 2 studenti $i<$stud-$ass
    $voti[$i]= rand(1,101);
}

var_dump ($voti);
echo "<ol>";
for ($i=0;$i<count($voti);$i++){
    if ($i%2==0){
        $col=$col1;    
    }
    else{
        $col=$col2;
    }
    
    if ($voti[$i]>=60){
        $suff++;
        $somma+=$voti[$i];
        $media=$somma/$suff;
        echo "<li><strong>" .$voti[$i] . "</strong></li><br>";
        if ($voti[$i]==101){
            $lode++;
        }
        if($voti[$i]>=80){
            $corso++;
            $percent= (($corso/15)*100); //va calcolata fuori dal ciclo perchè altrimenti lo ripete per ogni iterazione ed è uno spreco di efficienza
        }
    }
    else{
        $insuff++;
        echo  "<li><i>" . $voti[$i] . "</i></li><br>";
    }
    if ($voti[$i]<$min){
        $min=$voti[$i];
        $volte_min= ($min+1);// sbagliato bisogna fare un altro if mentre qui bisogna stabilire $volte_min=0
        //if ($voti[$i]==$min){$volte_min==0}
    }
    echo "<div style='background-color:$col'>";//chiudere il div
}

echo "</ol>";

echo "<table border=1><tr><td>";
echo "<br> La lode è stata assegnata " .$lode. " volte";
echo "<br> Il voto minimo assegnato è stato ".$min." ed è stato dato ". $volte_min. " volte";
echo "<br> Il voto medio dei promossi è ".$media;
echo "<br> Gli studenti potenzialmente ammessi al corso sono ".$corso;
echo "<br> La percentuale di quelli che rimarrano in lista d'attesa è ".$percent; 
echo "</td></tr></table>";







    ?>
</body>
</html>