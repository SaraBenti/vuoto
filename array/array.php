<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi Natale</title>
</head>

<body>
    <?php
    $a = [];
   // echo $a[0]; //indice che però non trova niente perchè 
    //non ho dato valori all'interno dell'indice (chiave)

    //inizializzo l'array
    for ($i = 0; $i < 10; $i++) {
        $a[$i] = rand (0,100); 
    }
    //stampo il contenuto dell'array
    for ($i = 0; $i < 10; $i++){
         echo ($i+1). ") " .$a [$i] . "<br>";

    }

    echo $a [0] + $a[1];
 
    
   //→ho creato 10 posizioni con elemento 1

   //per casa media degli elementi dell'array $a



   
    

    ?>
    </body>