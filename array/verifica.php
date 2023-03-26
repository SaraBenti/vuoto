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

/**
 * Si deve gestire l’elenco dei voti assegnati agli studenti di un corso. Si chiede di svolgere le
*seguenti attività:
*1. inizializzare il numero di studenti del corso assegnando un numero casuale da 20 a 50;
*2. considerando che il giorno dell’esame 2 studenti erano assenti, valorizzare l’array dei voti
*di ogni studente presente con interi casuali da 1 a 101;
*3. elencare tutti i voti presenti nell'array con uno sfondo alternato nelle varie righe, scrivendo
*in grassetto i voti sufficienti e in corsivo quelli insufficienti (la sufficienza corrisponde a 60
*e 101 corrisponde alla lode);
*4. modificare l’elenco del punto precedente utilizzando un elenco ordinato html;
*5. in un riquadro, riportare quante volte è stata assegnata la lode e quante volte è stato
*assegnato il voto più basso (tra quelli assegnati realmente);
*6. calcolare e visualizzare il voto medio dei promossi.
*7. Per accedere ad un corso specialistico di livello superiore, si deve aver superato l'esame
*con un voto minimo di 80 e sono disponibili solo un numero limitato di posti (definito a
*priori nella variabile $posti): calcolare e visualizzare quanti sono gli studenti
*potenzialmente ammessi e di questi la percentuale che rimane in lista d&#39;attesa.
 */
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
$assenti=2;
$voti = [];
for ($i=0; $i<$stud-$assenti; $i++){ 
    $voti[$i]= rand(1,101);//inizializzazione dell'array voti dentro al ciclo for
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
    echo "<div style='background-color:$col'>";
    
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
        }
    }
    else{
        $insuff++;
        echo  "<li><i>" . $voti[$i] . "</i></li><br>";
    }
    if ($voti[$i]<$min){
        $min=$voti[$i];
        $volte_min= 0;//resetto ogni volta il conteggio del minimo perchè è cambiato il minimo di riferimento
    }
    if($voti[$i]==$min){
        $volte_min++;
    }
}

echo "</ol>";

echo "<table border=1><tr><td>";

echo "<br> La lode è stata assegnata " .$lode. " volte";
echo "<br> Il voto minimo assegnato è stato ".$min." ed è stato dato ". $volte_min. " volte";
echo "<br> Il voto medio dei promossi è ".$media;
echo "<br> Gli studenti potenzialmente ammessi al corso sono ".$corso;
$percent= (($corso/15)*100); 
echo "<br> La percentuale di quelli che rimarrano in lista d'attesa è ".$percent; 
echo "</td></tr></table>";

    ?>
</body>
</html>