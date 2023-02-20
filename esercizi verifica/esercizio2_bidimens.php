<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2bidimens</title>
</head>

<body>
    <?php
    //1)primo array bidimensionale
    $p1 = ["Primini Primo", "Secondini Secondo"];
    $p2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"];
    $p3 = ["Violetti Viola", "Gaietti Gaia"];
    $partecipanti = [$p1, $p2, $p3];
    $corsi = ["Autocad", "Informatica", "Inglese"];
    //-----------------------------------------------------------------------------------------

    //2)secondo array bidimensionale
    $s1 = ['cognome' => "Primini", 'nome' => "Primo", 'corso' => "Autocad"];
    $s2 = ['cognome' => "Secondini", 'nome' => "Secondo", 'corso' => "Autocad"];
    $s3 = ['cognome' => "Giannini", 'nome' => "Gianni", 'corso' => "Informatica"];
    $studenti = [$s1, $s2, $s3];
    //-------------------------------------------------------------------------------------------

    //1.1.aggiungo un elemento all'array enumerativo
    foreach ($partecipanti as $k => $p) {
        if ($corsi[$k] == 'Informatica') {
            $indice = $k;
        }
    }
    echo $indice . "<br>";
    $partecipanti[$indice][] = 'Novella Novellini';
    var_dump($partecipanti);
    echo "<hr>";
    //-----------------------------------------------------------------------------------------

    //1.2.aggiungo un elemento all'array associativo
    $studenti[] = ['cognome' => "Novellini", 'nome' => "Novella", 'corso' => "Informatica"];
    var_dump($studenti);
    echo "<hr>";
    //--------------------------------------------------------------------------------------------

    //2.1 elencare tutti i nomi dell'array enumerativo
    foreach ($partecipanti as $partecipante) {
        foreach ($partecipante as $p) {
            echo $p . "<br>";
        }
    }
    echo "<hr>";
    //------------------------------------------------------------------------------------------

    //2.2 elencare i nomi dell'array associativo
    foreach ($studenti as $studente) {
        foreach ($studente as $s) {
            echo $s . "<br>";
        }
    }
    echo "<hr>";
    //------------------------------------------------------------------------------------------

    //3.1 calcolare il numero medio dei partecipanti ai corsi di un array enumerativo
    $numero_partecipanti = 0;
    foreach ($partecipanti as $partecipante) {
        $numero_partecipanti += count($partecipante);
    }
    echo $numero_partecipanti . "<br>";
    $numero_corsi = count($corsi);
    echo $numero_corsi . "<br>";
    $media_partecipanti = $numero_partecipanti / $numero_corsi;
    echo "la media dei partecipanti ai corsi è " . $media_partecipanti;
    echo "<hr>";
    //-------------------------------------------------------------------------------------------

    //3.2 calcolare il numero medio degli studenti in un array associativo
    //trovo i corsi senza ripetizioni
    $elenco_corsi = array();
    foreach ($studenti as $studente) {
        $elenco_corsi[] = $studente['corso'];
    }
    $elenco_corsi = array_unique($elenco_corsi);
    var_dump($elenco_corsi);
    echo "<br>";
    //trovo il numero dei corsi
    $nr_corsi = count($elenco_corsi);
    echo $nr_corsi . "<br>";
    //trovo il numero degli studenti
    $nr_studenti = count($studenti);
    echo $nr_studenti . "<br>";
    //trovo la media
    $media_studenti = $nr_studenti / $nr_corsi;
    echo "la media degli studenti dei corsi è " . $media_studenti;
    echo "<hr>";
    //-------------------------------------------------------------------------------

    //4.1 corso con maggior numero di partecipanti in un array enumerativo

    foreach ($partecipanti as $key => $partecipante) {
        if (!isset($max_partecipanti)) {
            $max_partecipanti = count($partecipante);
        }
        if ($max_partecipanti < count($partecipante)) {
            $max_partecipanti = count($partecipante);
            $corso_max = $corsi[$key];
        }
    }
    echo "il corso con il maggior numero di partecipanti è " . $corso_max . "<br>";
    echo "il numero più alto di partecipanti ai corsi è " . $max_partecipanti;
    echo "<hr>";
    //---------------------------------------------------------------------------------------

    //4.2 corso con maggior numero di studenti in array associativo
    $numero_studenti = array();
    foreach ($studenti as $studente) {
        //verifico se il corso è già presente nell'array
        if (key_exists($studente['corso'], $numero_studenti)) {
            //gli chiedo c'è la chiave corso?
            //il corso esiste già, aumento i partecipanti
            $numero_studenti[$studente['corso']]++;
        } else {
            //il corso non esiste, lo aggiungo all'array e inizializzo i partecipanti a 1
            $numero_studenti[$studente['corso']] = 1;
        }
    }
    //trovo il massimo
    $massimo = 0;
    foreach ($numero_studenti as $key => $value) {
        echo 'key: ' . $key . '<br>';
        echo 'value: ' . $value . '<br>';
        if ($value > $massimo) {
            //il numero di partecipanti è superiore al massimo, segno i valori
            $massimo = $value;
            $corso_massimo = $key;
        }
    }
    echo "il corso con più iscritti è " . $corso_massimo;
    echo "<hr>";
    //-----------------------------------------------------------------------------------------------

    //5.1 partecipante primo in ordine alfabetico array enumerativo
    foreach ($partecipanti as $partecipante) {
        foreach ($partecipante as $key => $value) {
            if (!isset($minimo)) {
                $minimo = $value;
            }
            if ($value < $minimo) {
                $minimo = $value;
            }
        }
    }
    echo "il primo in ordine alfabetico è " . $minimo;
    echo "<hr>";

    //5.2 studente primo in ordine alfabetico array bidimensionale
    //faccio un elenco di cognomi
    $elenco_cognomi = array();
    foreach ($studenti as $studente) {
        $elenco_cognomi[] = $studente['cognome'];
    }
    var_dump($elenco_cognomi);
    echo "<br>";
    foreach ($elenco_cognomi as $x => $y) {
        if (!isset($min)) {
            $min = $y;
        }
        if ($y < $min) {
            $min = $y;
        }
    }
    echo "il primo in ordine alfabetico è " . $min;
    echo "<hr>";
    //-----------------------------------------------------------------------

    //6.1 aggiungere una chiave a valore enumerativo nell'indice di un altro array
    foreach ($partecipanti as $i => $p) {
        $p['corso'] = $corsi[$i];
        var_dump($p);
        echo "<br>";
    }
    ?>
</body>

</html>