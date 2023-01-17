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
    //lavorare con 2 variabili giorno e mese
    $giorni_manc_anno = 365 - $giorni_mancanti ;
    echo $giorni_manc_anno;
    $d = date("d");
    switch ($m){
        case 1: $giorni_alla_fine_anno=365-$d;
        break;
        case 2: $giorni_alla_fine_anno = 365 - (31+$d);
        break;
        case 3: $giorni_alla_fine_anno = 365 - (31+28+$d);
        break;
        case 4: $giorni_alla_fine_anno = 365 - (31+28+31+$d);
        break;
        case 5: $giorni_alla_fine_anno = 365 - (31+28+31+30+$d);
        break;
        case 6: $giorni_alla_fine_anno = 365 - (31+28+31+30+31+$d);
        break;
        case 7: $giorni_alla_fine_anno = 365 - (31+28+31+30+31+30+$d);
        break;
        case 8 : $giorni_alla_fine_anno = 365 - (31+28+31+30+31+30++31+$d)
        break;
        case 12: $giorni_alla_fine_anno - $d;
   }
        ?>
        </body>
