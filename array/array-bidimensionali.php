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
    echo "<tr>";
    foreach ($studente as $k=>$v){
        echo "<td> $v </td>";
    }
    echo "</tr>";
}

?>


    
</body>
</html>