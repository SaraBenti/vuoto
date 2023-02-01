<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>riprovo 2 d</title>
</head>
<body>
    <?php
$s1=['cognome'=>"Primini",'nome'=>"Primo",'corso'=>"Autocad"];
$s2=['cognome'=>"Secondini",'nome'=>"Secondo",'corso'=>"Inglese"];
$s3=['cognome'=>"Giannini",'nome'=>"Gianni",'corso'=>"Informatica"];
$studenti=[$s1,$s2,$s3];
$minimo=count($studenti[0]);

foreach ($studenti as $studente){
    foreach($studente as $k=>$s){
        echo $s. "<br>";
    }
}

//somma
$somma=0;
$partecipanti= count($studente);
$somma+=$partecipanti;
//minimo
$numero_studenti=count($s);
if($numero_studenti<$minimo){
    $minimo=$numero_studenti;
}
echo $somma. "<br>";
echo $minimo;

    ?>
</body>
</html>