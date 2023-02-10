<?php
/**
 * Descrizione della funzione
 * @param mixed $name
 * @return mixed
 */


/**
 * Restituisce un colore in base al minuto corrente
 * @param 
 * @return string
 */
function colore(){
    $w=date ("i"); //giorno della settimana da 0 domenica a 6
    $colore= "";
    switch($w){
        case 10: $colore="#ff0000";break;//1 corrisponde a lunedi
        case 12: $colore="#00ffff";break;
        case 13: $colore="#00ff00";break;
        case 20: $colore="#0000ff";break;
        default:
        $colore="#000000";
    }
    return $colore;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
////2) Scrivere una funzione che restituisce una stringa contenente un codice colore in base al giorno corrente della settimana 
//(es il lunedì restituisce il colore rosso, il martedì il colore giallo, ecc).
 echo colore();
 $colore= colore();
echo date ("i");





//Utilizzare la funzione appena descritta per realizzare un div html con un colore di sfondo diverso in funzione del giorno della settimana.
    ?>
    <div style="background-color:<?php echo $colore ?>" >
div colorato</div>
</body>
</html>