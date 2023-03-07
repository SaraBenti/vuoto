<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Dati ricevuti dal form!!!
    <?php
//nella barra dell'url vengono indicati dei dati dopo l'url separati da &
//chiave-valore&chiave-valore...
//%40= @
//variabili di sistema $_
//$_ rray associativi che contengono le coppie chiavi-valori
foreach ($_GET as $k=>$v){
    if($k=='dataNascita'){
        $v=data_db_2_user($v);
    }
    
    echo "<br>". $k.": ".$v;
}

//se c'è POST nell'html utilizzare $_POST
//esiste $_REQUEST contiene tutto ciò che è inviato con POST e 
//tutto ciò che è inviato con POST





//scrivere la data nella forma corretta
function data_db_2_user($data){
    //$data è 1990-12-31
    $anno=substr($data,0,4);//questo è l'anno
    $mese=substr($data,5,2);
    $giorno=substr($data,8);//fino alla fine
    return "$giorno/$mese/$anno";
}
//per casa fare la funzione opposta da user a db
function data_user_2_db($data){
   //altro metodo
   //$data equivale 31/12/1990
   //crea tanti pezzi, suddivide una stringa tramite un elemento separatore
   $a= explode("/",$data);//$a è un array monodimensionale numerico
   $giorno=$a[0];
   $mese=$a[1];
   $anno=$a[2];
   return "$anno-$mese-$giorno";
}
    ?>
</body>
</html>