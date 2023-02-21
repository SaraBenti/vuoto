<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe 2</title>
</head>
<body>
    <?php
// come il file classe1 ma senza $stringa
class Esempio{
    public $stringa="";
    
    function stampaQualcosa($stringa){
        echo $stringa;
       
    }
    function stampaQualcosaInGrassetto($stringa){
        echo "<b>";
       $this->stampaQualcosa($stringa);//significa qui dentro prendi il metodo stampaStringa
        echo "</b><br>";
    }
}
$e= new Esempio();
$e->stampaQualcosaInGrassetto("stringa da stampare");
echo "<hr>";

?>
    
</body>
</html>