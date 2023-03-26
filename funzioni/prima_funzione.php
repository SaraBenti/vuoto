<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funzione 1</title>
</head>
<body>
    <?php
function mia_somma($a,$b){
        $ris = $a + $b;
        return $ris;
    
}


    $r = mia_somma(1, 2);
    echo $r;

    //nella programmazione ad oggetti si usa il camel case mediaPromossi
    //$m=media_promossi($a,6);
    //function media_promossi($a,$s){ //$a è un array $s sono i voti sufficienti
    //    foreach ($a as $v){
     //       if ($v>=$s){
    //            $somma+=$v;
      //          $i++;
      //      }
     //   }
      //  return ($i>0?($s/$i):0);
        
   // } 
  



?>
</body>
</html>