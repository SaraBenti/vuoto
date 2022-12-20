<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Titolo dinamico in php" ?></title>
</head>

<body>
    <p>
        Ciao mondo!
        <?php
        // commento in linea,finisce quando si va a capo
        /* commento delimitato che si chiude con */
        echo "Ciao a tutti quelli dell'ultima fila!";
        echo date("H:i:s"); //orario del server, prende l'orario nel momento in cui viene interpretato, per questo è pagina dinamica
        
        ?>
    </p>

</body>

</html>