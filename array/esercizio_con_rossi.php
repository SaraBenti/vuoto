<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Sono forniti i 2 array elencati di seguito:

Nell’array bidimensionale $partecipanti ogni elemento rappresenta un array di partecipanti ai
vari corsi svolti dall'ente di formazione Enaip. I singoli array $p1, $p2, ecc contengono i
cognomi e nomi dei partecipanti ad un corso specifico.
L’array $corsi contiene i nomi dei corsi, nello stesso ordine del primo, cioè il corso Autocad è
stato seguito dai partecipanti elencati in $p1, Informatica è stato seguito dai partecipanti di $p2,
ecc.
Si chiede di svolgere le seguenti attività:
1. aggiungere il nuovo partecipante “Novella Novellini” al corso di Informatica
2. elencare i nomi di tutti i partecipanti (di tutti i corsi)
3. calcolare il numero medio dei partecipanti ai corsi
4. indicare il nome del corso con il maggior numero di partecipanti
5. tutti i partecipanti devono superare un esame di selezione, che si svolge nello stesso
giorno e con la stessa commissione: scrivere il nome del partecipante che sarebbe il
primo in ordine alfabetico a sostenere l'esame (tra tutti i partecipanti di tutti i corsi).
6. si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, con
chiave 'corso' e valore il nome del corso, fornito nel secondo array.

---
Svolgere le stesse attività richieste sopra (escluso il punto 6) con questi array:-->





    <?php
    $p1 = ["Primini Primo", "Secondini Secondo"];
    $p2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"];
    $p3 = ["Violetti Viola", "Gaietti Gaia"];
    $partecipanti = [$p1, $p2, $p3];
    //var_dump($partecipanti);
    //echo $partecipanti[0][0]."<br>";
    //echo $partecipanti[1][0]."<br>";
    $corsi = ["Autocad", "Informatica", "Inglese"];
    //var_dump($partecipanti);
    //---------------------------------------------------------------------------------------------------------------------------------
    //cerco l'indice dell'array relativo al corso di informatica per aggiungere novella in caso non sapessi a quale indice corrisponde
    for ($i = 0; $i < 3; $i++) {
        if ($corsi[$i] == 'Informatica') //perchè so che $corsi e $partecipanti hanno lo stesso indice
            $indice = $i; //memorizza nella variabile $indice il valore della chiave 'informatica'
    }
    echo '$indice vale ' . $indice . "<br>";
    //aggiungo novella con l'indice trovato
    //$partecipanti[$indice][] = "Novella Novellini";

    //aggiungere Novella Novellini al corso di informatica
    $partecipanti[1][] = 'Novella Novellini';
    //--------------------------------------------------------------------------------------------------------------------------------

    //elenco di tutti i partecipanti di tutti i corsi
    foreach ($partecipanti as $array) {
        foreach ($array as $studente) {
            echo $studente . "<br>";
        }
    }
    //-----------------------------------------------------------------------------------------------------------------------------------

    //calcolare il numero medio dei partecipanti ai corsi
    //calcolo il numero dei corsi
    $numero_corsi = count($partecipanti); //è uguale a count($corsi) e conta il numero degli elementi(3)
    //calcolo il numero dei partecipanti
    $numero_partecipanti = 0;
    foreach ($partecipanti as $array) {
        $numero_partecipanti += count($array); //sommo ad ogni ciclo il numero di partecipanti
    }
    //calcolo il numero medio di partecipanti ai corsi
    $numero_medio = $numero_partecipanti / $numero_corsi;
    echo "la media dei partecipanti ai corsi è " . $numero_medio . "<br>";
    //----------------------------------------------------------------------------------------------------------------------------------

    //indicare il nome del corso con il maggior numero di partecipanti
    $massimo = 0;
    for ($i = 0; $i < count($corsi); $i++) {
        //il numero di partecipanti è superiore al massimo, segno i valori
        if (count($partecipanti[$i]) > $massimo) {
            $massimo = count($partecipanti[$i]);
            $corso_massimo = $i; //ad ogni ciclo devo segnare la $i
        }
    }
    echo "il corso con più iscritti è " . $corsi[$corso_massimo];
    //----------------------------------------------------------------------------------------------------------------------------------

    $s1 = ['cognome' => "Primini", 'nome' => "Primo", 'corso' => "Autocad"];
    $s2 = ['cognome' => "Secondini", 'nome' => "Secondo", 'corso' => "Autocad"];
    $s3 = ['cognome' => "Giannini", 'nome' => "Gianni", 'corso' => "Informatica"];
    $studenti = [$s1, $s2, $s3];
    echo "<br>";
    //var_dump($studenti);
    echo $studenti[0]['nome'] . " " . $studenti[0]['cognome'] . "<br>";
    echo $studenti[1]['nome'] . "<br>";

    //aggiungere Novella Novellini al corso di informatica in un array associativo
    $studenti[] = ['cognome' => "Novellini", 'nome' => "Novella", 'corso' => "Informatica"];
    //-----------------------------------------------------------------------------------------------------------------------------------

    //elenco di tutti i partecipanti di tutti i corsi(in questo caso devo andare a prendere la chiave)
    foreach ($studenti as $array) {
        echo $array['cognome'] . " " . $array['nome'] . "<br>";
    }
    //--------------------------------------------------------------------------------------------------------------------------------------

    //calcolare il numero medio dei partecipanti ai corsi
    //calcolo il numero di corsi
    $numero_corsi = 0;
    $elenco_corsi = [];
    foreach ($studenti as $studente) {
        //inserisco il corso in un array solo se non è già presente(devo gestire i duplicati)
        $elenco_corsi[] = $studente['corso'];
    }
    //tolgo i valori doppi
    $elenco_corsi = array_unique($elenco_corsi);
    //conto i corsi unici
    $numero_corsi = count($elenco_corsi);
    echo "i corsi non duplicati sono numero " . $numero_corsi . "<br>";
    //conto gli studenti che sono nell'array studenti
    $numero_partecipanti = count($studenti);
    //calcolo la media
    $numero_medio = $numero_partecipanti / $numero_corsi;
    //------------------------------------------------------------------------------------------------------------------------------------

    //indicare il nome del corso con il maggior numero di partecipanti
    //dobbiamo creare un array di corsi e uno con il numero dei partecipanti ($elenco_corsi l'ho gia fatto nella media)
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
    ?>
</body>

</html>