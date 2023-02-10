<?php
/**
 * restituisce la stringa con tutti i dati dello strudente
 * @return string
 */
function elenco_dati_studente($a){
    $stringa=" ";
    foreach ($a as $k=>$v){
       $stringa.= "$k: $v ";

    }

    return $stringa;
}

/**
 * conta gli studenti con chiave corso= a $corso
 * @param array $studenti array bidimensionale degli studenti
 * @param stringa $corso nome del corso da cercare
 * @return int totale studenti del corso
 */
function count_studenti_corso($studenti, $corso){
    $tot=0;
    foreach ($studenti as $studente){
        if (($studente ['corso'])== $corso){
            $tot++;
        }
    }
    return $tot;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array bi-dimensionali 2</title>
</head>
<body>
    <?php
$p1= ["Primini Primo","Secondini Secondo"];
$p2=["Giannini Gianni", "Stefanini Stefano","Mariolini Maria", "Giacomini Giacomo"];
$p3=["Violetti Viola", "Gaietti Gaia"];
$partecipanti = [$p1, $p2, $p3];
  //  $partecipanti = [
   //     ["Primini Primo", "Secondini Secondo"],
   //     ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"],
   //     ["Violetti Viola", "Gaietti Gaia"]
   // ]; altro modo per scrivere la stessa cosa invece che come sopra con l'elenco
   // prima di p1, p2 e p3 e poi partecipanti
$corsi=["Autocad", "Informatica", "Inglese"];
// for ( $i=0;$i< count($partecipanti);$i++){
//         $p=$partecipanti[$i];//array monodimensionale
//          $nome_corso=$corso[$i];
//         for ($j=0; $j<count($p);$j++){
//             $nome= $p[$j];
//             echo $nome ."<br>";
//         }       
// } //questo sarebbe il punto 2  con i cicli for: stampa gli elementi

//punto 2 con foreach:stampa gli elementi
    $somma = 0;
    $corso_max_partecipanti=0;
    //$primo_array_di_partecipanti= $partecipanti[0]
    if ($partecipanti) {
        $max_partecipanti = count($partecipanti[0]); //dinamicamente metto il primo valore degli elementi dell'array
    }

    foreach ($partecipanti as $indice => $p) {
        if ($corsi[$indice] == "Informatica") {
            //aggiungo il partecipante
            $p[] = "Novellini Novella";
        }
        //somma dei partecipanti
        $numero_partecipanti = count($p);
        $somma += $numero_partecipanti;

        //massimo dei partecipanti
        // if ($max_partecipanti < $numero_partecipanti) {
        //     $max_partecipanti = $numero_partecipanti;
        //     $corso_max_partecipanti = $corsi[$i]; //nome del corso che ha il max partecipanti
        // }

        //4)con variante:tutti i corsi che hanno il max numero di partecipanti→array
        if ($max_partecipanti < $numero_partecipanti) {
            if($max_partecipanti<$numero_partecipanti){
                //ho trovato un nuovo max?
                $max_partecipanti = $numero_partecipanti;
                //svuoto l'array
                $corsi_max_partecipanti = [];
            }
            $corsi_max_partecipanti[$corsi[$indice]];
        }
            echo "elenco dei partecipanti del corso " . $corsi[$indice] . "<br>";
            echo "<ol>";
            foreach ($p as $nome) {
                echo "<li>" . $nome . "</li>";
                //5) da fare cercare il minore tra tutti i nomi (in ordine alfabetico)
            }
            echo "</ol>";
        }
        //punto 1 faccio l'if sotto il primo if
        echo "<hr>";
        if ($corsi) { //verificare che ci sia almeno un elemento perchè una divisione con 0 denominatore non si può fare
            echo "la media vale " . $somma / count($corsi);
        echo "<br> 4)corso con max partecipanti: " . $corso_max_partecipanti;
        echo "<br>4bis) ";
        foreach ($corsi_max_partecipanti as $c){
            echo "$c ";
        }
        } else {
            echo "non ci sono corsi";
        }

        //6) aggiungi un elemento all'array che è il nome del corso
        foreach($partecipanti as $i=>$p){
        $p['corso'] = $corsi[$i];
        print_r($p);
        echo "<br>---<br>";
        }

echo "<hr>";
    //avvio esercizio alternativo per casa
    $s1= ['cognome'=>"Rossi",'nome'=>"Mario",'corso'=>"Informatica"];
    $s2 = ['cognome' => "Rossini", 'nome' => "Mariolino", 'corso' => "Inglese"];
    $s3 = ['cognome' => "Bossi", 'nome' => "Maria", 'corso' => "Informatica"];
    $studenti = [$s1, $s2, $s3];

    
        //aggiunta di uno studente nel primo indice disponibile (questo c'è nella verifica)
    $nuovo_studente[] = ['cognome' => "novellini", 'nome' => "Novella"];
    $studenti[] = $nuovo_studente;
    //se aggiungo un elemento in questo modo me lo mette nella chiave 0
    //$s1[]= "simpatico";
    //si va sempre a incrementare rispetto all'ultimo indice inserito



    foreach ($studenti as $studente){
       //questo se non conosco la chiave
       // foreach($studenti as $k=>$v){
        //    if ($k=="cognome"){
         //       echo $v;// la stessa cosa è $studente[$k];
            
        
        //2
        //creiamo una funzione per elencare i dati studenti
        echo "<br>". elenco_dati_studente($studente);


        //ho reato la funzione invece di questo di seguito
        //echo $studente['cognome'] . "<br>";
        //$corsi['informatica']++;
        //$studente['corso']
    }
//scrivere una funzione che conta gli studenti di un corso generico
    $corso= $studente['corso'];
    echo "<br> studenti totali: ". count_studenti_corso($studenti, $corso );

    //3  4 
    $nome



    



?>
</body>
</html>