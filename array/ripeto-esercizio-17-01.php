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
$a=[];
for($i=0; $i<20; $i++){
    $a[$i]= rand(0,90);
}
print_r($a);
echo "<br>";

$col1="#ccc";
$col2="#fff";
$neonati=0;
$max=$a[0];
$somma=0;
$maggiorenni=0;
    for($i=0;$i<20;$i++){
        $somma+= $a[$i];
        $media= $somma/20;
     
        if ($i%2==0){
            $col=$col1;
        }
        else{
            $col=$col2;
        }
        if ($a[$i]>=18){
            $maggiorenni++;
            echo ($i+1).") <strong>".$a[$i]."</strong><br>";
        }
        else{
            if($a[$i]==0){
                $neonati=$neonati+1;
            }
             echo ($i+1).") <em>". $a[$i]."</em><br>"; 
        }
        if($a[$i]>$max){
            $max=$a[$i];
        }
        echo "<div style='background-color:$col'>";
    }
    echo "<table border=1><tr><td>";
    echo "i neonati sono ".$neonati. "<br>";
    echo "il più anziano ha ".$max." anni<br>";
    echo "l'età media è di ".$media." anni<br>";
    echo "per le elezioni servono ". $maggiorenni. " schede<br>";
    echo "</td></tr></table>";
    ?>
</body>
</html>