<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe 1
    </title>
</head>
<body>
    <?php
class Esempio{
    public $stringa="";//proprietà
    function __construct($stringaDiIngresso){
        $this->stringa=$stringaDiIngresso;
        
    }
    function stampaStringa(){
        echo $this->stringa;
       
    }
    function stampaStringaInGrassetto(){
        echo "<b>";
       $this->stampaStringa();//significa qui dentro prendi il metodo stampaStringa
        echo "</b>";
    }
    function stampaStringaInCorsivo(){
        echo "<i>";
       $this->stampaStringa();
        echo "</i>";
    }
    function stampaStringaConTag($tag){
        echo "<$tag>";
       $this->stampaStringa();
        echo "</$tag>";
    }
}
$e1=new Esempio("stringa dinamica da stampare");//non posso mettere un parametro d'ingresso non essendoci il construct
$e2=new Esempio("seconda stringa da stampare");
$e1->stampaStringa();
echo "<br>";
$e1->stampaStringaInGrassetto();
echo "<br>";
$e1->stringa="Nuovo valore di stringa";
$e1->stampaStringaInCorsivo();
echo "<br>";
$e2->stampaStringa();
echo "<br>";
$e1->stampaStringaConTag("div");
echo "<br>";

?>
</body>
</html>