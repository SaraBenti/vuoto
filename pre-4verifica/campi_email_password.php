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
$dsn = "mysql:dbname=ifts;host=127.0.0.1";
try{
    $ute_email=$_REQUEST['ute_email'];
    $ute_password=$_REQUEST['ute_password'];
$con = new PDO($dsn, "root", "");
$sql="INSERT INTO utenti (ute_email,ute_password) VALUES (:ute_email, :ute_password)";
$st= $con->prepare($sql);
//bind
$st->bindParam('ute_email',$ute_email);
$st->bindParam('ute_password',$ute_password);
$st->execute();

}catch (PDOException $e) {
    echo "Errore di connessione";
    echo $e->getMessage();
}
header("Location: index.php");
    ?>
</body>
</html>