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
  echo date ("12 7 1980");
  $t = date ("t");
  switch ($t) {
    case 28: 
        $mese = 2;
    case 30:
        $mese = 4;
    case 31:
        $mese = 3;
  }
  $giorni_al_compleanno = $giorni_mancanti + date("t");
  echo $giorni_al_compleanno;
  echo "<hr>";


    $data_attuale = date("d-m");
    $data_fine = "12-07";
    $giorni_rimanenti = 0;
    
    
        switch ($data_attuale) {
            case "01":
                $giorni_rimanenti = 31 - date("01-12");
                break;
            case "02":
            case "03":
            case "04":
            case "05":
            case "06":
                $giorni_rimanenti = -1;
                break;
            default:
                $giorni_rimanenti = -1;
        }
    
    echo $giorni_rimanenti;

        ?>
