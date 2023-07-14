<?php
/**
 * Descrizione della funzione
 * @param mixed $name
 * @return mixed
 */


/**
 * Restituisce un colore in base al giorno della settimana
 * @param 
 * @return string
 */
function colore(){
    $w=date ("w"); //giorno della settimana da 0 domenica a 6
    $colore= "";
    switch($w){
        case 1: $colore="#ff0000";break;//1 corrisponde a lunedi
        case 2: $colore="#00ffff";break;//martedì
        case 3: $colore="#00ff00";break;
        case 4: $colore="#0000ff";break;
        case 5: $colore="#ffff00";break;
        case 6: $colore="#ff00ff";break;
        default:
        $colore="#000000";//domenica
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
echo date ("w");





//Utilizzare la funzione appena descritta per realizzare un div html con un colore di sfondo diverso in funzione del giorno della settimana.
    ?>
    <div style="background-color:<?php echo $colore ?>" >
div colorato</div>
</body>
</html>