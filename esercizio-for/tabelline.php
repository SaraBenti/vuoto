<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio tipo verifica</title>
</head>

<body>
    <!--tabella in html con contenuto in php-->
    <table border=1 style="border-collapse: collapse;">
        <tr> <!--table row=riga-->
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr> 
            <td>2</td>
            <td>4</td>
            <td>6</td>
        </tr>
        <tr> 
            <td>3</td>
            <td>6</td>
            <td>9</td>
        </tr>
    </table>
    <hr>
    <table border=1 style="border-collapse: collapse;">
        <?php 
    //cicli innestati→le variabili devono essere diverse
    $fine=10;
    for ($r = 1; $r <= $fine; $r++){
    echo "  <tr>"; 
        for ($i = 1; $i <= $fine; $i++){
        echo " <td>" . ($i*$r) . "</td>";
        
        }
    echo "</tr>";
    }   
        
        ?>
    </table>
   
    </body>