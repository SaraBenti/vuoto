<?php
include_once("include/conn_db.php");
session_start();
$email = "";
$password = "";
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}
//verifico se email e password sono corrette
//collegarsi al db
//ricerca=select nella tabella users di laravel 

$sql = "SELECT * FROM users WHERE use_email= :email
AND use_password= :password";
$binds = [
    ['segnaposto' => 'email', 'var' => $email],
    ['segnaposto' => 'password', 'var' => $password]
];
$records=fz_sql($sql, $binds);
//$records contiene 1 record se autenticazione corretta altrimenti 0 record
if($records){
    //se true vuol dire che $records non è vuoto
    echo "autenticazione ok";
    $_SESSION['login']=true;
    $_SESSION['use_id']=$records[0]['use_id'];//prendiamo i dati dell'utente loggato
    $_SESSION['use_nome']=$records[0]['use_nome'];
}else{
    //se false $records vuoto
    echo "autenticazione ko: riprovare <br> <a href=index.php>riprovare</a>";
    $_SESSION['login']=false;

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

</body>

</html>