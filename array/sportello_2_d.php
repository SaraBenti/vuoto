<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esempio 2d</title>
</head>
<body>
    <?php
$s1=['voto'=>100,'cognome'=>"Rossi",'nome'=>"Mario",'corso'=>"Informatica"];
$s2 = ['voto'=>90, 'cognome' => "Rossini", 'nome' => "Mariolino", 'corso' => "Inglese"];
$s3 = ['voto'=>80,'cognome' => "Bossi", 'nome' => "Maria", 'corso' => "Informatica"];
$studenti = [$s1, $s2, $s3];

//2 cicli innestati per scorrere gli elementi degli array

$i=0;
$somma=0; //in questo modo si predispone a memorizzare più dati
foreach($studenti as $s){
   
    echo "studente n.". ++$i. "<br>"; //in questo modo mi calcola il numero degli studenti e alla fine non mi dà un numero in più
    foreach($s as $v){
        echo $v . "<br>";
    }
    $somma=$somma+$s['voto'];
    echo "<br>";//dopo il primo 

}
if (count($studenti)>0){
echo "media= ".( $somma/count($studenti));
}
else {
echo "non ci sono studenti";
}
//quando devo memorizzare più di un dato devo usare un array

    ?>
</body>
</html>