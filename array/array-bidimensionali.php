<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array bidimensionali</title>
</head>
<body>
<?php
$s1=['nome'=>"Mario", 'cognome'=>"Rossi", 'voto'=>10 ];
$s2=['nome'=>"Giacomo", 'cognome'=> "Verdi", 'voto'=>8 ];
$s3=['nome'=>"Stefano", 'cognome'=> "Bianchi", 'voto'=>6 ];
$s4=['nome'=>"Osvaldo", 'cognome'=> "Faustini", 'voto'=>3 ];

$s=[$s1, $s2,$s3,$s4 ];
//print_r($s);

//$s[0]; //coincide con $s1
//$s1=['nome'];   //coincide con Mario
//$s[0]['nome'];
?>
<table>
    <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>voto</th>
        
    </tr>

<?php
foreach($s as $studente){
   // print_r($studente);//stampa i singoli studenti 
    echo "<tr>";
    echo "<td>";
   echo $studente['nome'];
    echo "</td>";
    echo "<td>";
    echo $studente['cognome'];
    echo "</td>";
    echo "<td>";
    echo $studente['voto'] . "<br>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";

//per casa creare la tabella sopra
//senza conoscere le chiavi dei singoli elementi di $s
//2 foreach innestati
foreach ($s as $studente){
    echo "<table border=1>";
    echo "<tr>";
    foreach ($studente as $k=>$v){
        echo "<td> $v </td>";
    }
    echo "</tr>";
    echo "</table>";
}

echo "<hr>";
$p1= ['nome1'=>"Primini Primo",'nome2'=>"Secondini Secondo"];
$p2=['nome1'=>"Giannini Gianni", 'nome2'=>"Stefanini Stefano", 'nome3'=>"Mariolini Maria", 'nome4'=>"Giacomini Giacomo"];
$p3=['nome1'=>"Violetti Viola", 'nome2'=>"Gaietti Gaia"];
$p2[]="Novella Novellini";
$corsi=['corso1'=>"Autocad", 'corso2'=>"Informatica", 'corso3'=>"Inglese"];
//print_r($partecipanti);
//print_r($corsi);
$autocad=[$p1];
$informatica=[$p2];
$inglese=[$p3];
$num_autocad=0;
$num_informatica=0;
$num_inglese=0;
$numero=0;
$maggiore=0;

foreach ($p1 as $kia=>$val){
        echo $val;
        echo "<br>";
        $num_autocad++;        
    }
    foreach ($p2 as $kiav=>$valo){
        echo $valo;
        echo "<br>";
        $num_informatica++;        
    }
    foreach ($p3 as $kiave=>$valor){
        echo $valor;
        echo "<br>";
        $num_inglese++;        
    }
foreach ($corsi as $khiave=>$valore){
    echo $valore;
    echo "<br>";
    $numero++;
}
$numero_medio=($num_autocad+$num_informatica+$num_inglese)/$numero;
echo "il numero medio dei partecipanti ai corsi è ". $numero_medio;
echo "<br>";
$partecipanti[]=$num_autocad;
$partecipanti[]=$num_informatica;
$partecipanti[]=$num_inglese;
print_r($partecipanti);
echo "<br>";
$max=$partecipanti[0];
for ($i=0;$i<count($partecipanti);$i++){
    if($partecipanti[$i]>$max){
        $max=$partecipanti[$i];
    }
}
echo "il numero massimo di partecipanti ai corsi è ". $max;


?>


    
</body>
</html>