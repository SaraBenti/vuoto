<?php
session_start();
//memorizzazione informazioni utente per il tempo della sessione
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        ** nuova tabella nel db IFTS  **
CREATE TABLE `ifts`.`users` (`use_id` INT(11) NOT NULL AUTO_INCREMENT , 
`use_nome` VARCHAR(200) NOT NULL , `use_email` VARCHAR(200) NOT NULL ,
 `use_password` VARCHAR(50) NOT NULL , PRIMARY KEY (`use_id`), UNIQUE 
 `use_email` (`use_email`)) ENGINE = InnoDB;
    -->
</body>
<?php
if (array_key_exists('utenteDelSito',$_COOKIE)){
    echo "Bentornato ";
}else{
    echo "Benvenuto ";
}
if (array_key_exists('nome',$_SESSION))
echo " ".$_SESSION['nome'];
print_r($_SESSION);
?>

</html>