<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <?php
//quanti giorni mancano alla fine del mese?
   echo date("d m Y");// echo date("d/m/Y"); per mettere gli slash
    echo "<br>";

   $m = date ("m");
   switch ($m){
        case 2: //anche se m restituisce 02 nel case non c'è bisogno di scrivere 02 perchè restituisce l'intero
            $giorni_del_mese = 28;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $giorni_del_mese = 30;
            break;
        default: $giorni_del_mese = 31; //non serve il break perchè dopo non ho più nulla
   }

   // $d = date("d");

    $giorni_mancanti = $giorni_del_mese - date("d");
    echo "giorni mancanti = $giorni_mancanti";
echo "<hr>";
    //PER CASA: quanti giorni mancano al mio compleanno?

    $t = date ("t");
    switch ($t){
        case 28: 
            $numero_giorni = 28;
            break;
        case 31: 
            $numero_giorni1 = 31;
            break;
        case 30:
            $numero_giorni2 = 30;
            break;
         case 12:
             $giorni_luglio=12;
             break;
    }
    $giorni_al_compleanno = $giorni_mancanti + date ("28") + 2* date ("31") + 2* date ("30") + date ("12");
    echo "giorni mancanti al mio compleanno = $giorni_al_compleanno";

        ?>