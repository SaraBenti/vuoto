<?php
 /**
     * restituisce la somma del campo $chiave di ogni elemento dell'arry 
     * 
     */

    //4
    function fatturato_totale($arrays, $chiave)
    {
        //$array è un array bidimensionale
        $somma = 0;

        foreach ($arrays as $array) {
            if (array_key_exists($chiave, $array))
                $somma += $array[$chiave];
        }
        return $somma;
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica corretta</title>
</head>
<body>
<?php
 $dato1 = ['nome' => '101', 'numero' => 20, 'euro' => 2000];
 $dato2 = ['nome' => '102', 'numero' => 30, 'euro' => 3000];
 $dato3 = ['nome' => '103', 'numero' => 40, 'euro' => 4000];
 $dati = [$dato1, $dato2, $dato3];

 /* stessa cosa scritta sopra
 $dati = [
 0 => ['nome' => '101', 'numero' => 20, 'euro' => 2500],
 1 => ['nome' => '101', 'numero' => 20, 'euro' => 2500],
 2 => ['nome' => '101', 'numero' => 20, 'euro' => 2500]
 ];
 */



 $somma = 0;
 $max = 0;
 $nome = "";
 foreach ($dati as $dato) {
     //1
     echo $dato['nome'] . "<br>";

     //2
     $somma += $dato['numero'];
     //3
     if ($dato['euro'] > $max) {
         $max = $dato['euro'];
         $nome = $dato['nome'];
     }
 }

 echo "<hr>";
 //2
 //echo "somma del punto 2: " . fatturato_totale($dati, 'numero') . "<br>";
 echo "Somma del punto 2: " . $somma . "<br>";
 echo "Fatturato max: " . number_format($max, 2, ",", ".") . " di $nome <br>";
 //4
 $fatturato_totale = fatturato_totale($dati, 'euro');
 //5
 if ($dati) {
     echo "la media vale " .
         number_format($fatturato_totale / count($dati), 2, ",", ".");
 }

 echo "<hr>";

 //6
 foreach ($dati as $i => $dato) {
     $dati[$i]['anno'] = date('Y');
 }
 //print_r($dati);
 
 //7
 //cifra da detrarre ogni anno 500€
 //devo creare una array fatto così:
 //$fatturato= ['2023'=> 9000,'2022'=>8500,'2021'=>8000];
 
 $fatturato = [];
 $anno = date("Y");
 for ($i = 1; $i < 10; $i++) {
     $fatturato[$anno] = $fatturato_totale - (500 * ($i - 1));
     $anno = $anno - 1;
     //$fatturato_totale = $fatturato_totale - 500;
 }

 echo "Fatturato:<br>";
 //print_r($fatturato);
 foreach($fatturato as $k => $v){
     echo "$k: $v<br>";
 }



 $fatturato_totale = fatturato_totale($dati, 'euro');
 $mese = date("m"); //"02" 12
 $incasso = [];
 //versione di Giovanni
 for ($i = $mese; $i < ($mese + 12); $i++) {
     $chiave = ($i % 12);
     if($chiave ==0 ) 
         $chiave = 12;
     $incasso[$chiave] = $fatturato_totale;
     $fatturato_totale = $fatturato_totale - 500;
 }
 echo "<hr> INCASSO: "; print_r($incasso);
 



 //spiegazione n.6
 for ($i = 0; $i < count($dati); $i++) {
     //$dati[$i] è un array associativo 
     //$dati[$i]['euro'] è un elemento dell'array associativo della riga precedente
     $dati[$i]['euro'] = 0; 
     $dati[$i][] = date('Y'); //aggiunge in $dati[$i] un elemento con chiave numerica (la prima disponibile)
     $dati[$i]['anno'] = date('Y'); //aggiunge in $dati[$i] un elemento con chiave associativa 'anno'
 }
 //print_r($dati);
 

 //Giorgio suggerisce array_push, ma NON risolve l'esercizio perchè inserisce solo l'elemento senza poter specificare la chiave
 foreach ($dati as $i => $dato) {
     array_push($dati[$i], date("Y"));
 }
 //print_r($dati);
 echo "<hr>";


 ?>


    
</body>
</html>