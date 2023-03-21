<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrati</title>
</head>
<body>
    <!--inserimento di form che va a finire a inserimento_registrazione-->
<form method="POST" action="inserimento_registrazione.php" enctype="multipart/form-data"> <!-- per inviare il contenuto binario di un file alla pagina successiva
è necessario fare l'enctype-->
  Nome:  <input type="text" name=nome><br>
  Cognome: <input type="text" name=cognome><br>
  Email: <input type="email" name=email><br>
  Password: <input type="password" name=password><br>
  Immagine di profilo: <input type="file" name=icona>
 CV: <input type="file" name=cv>
 
  <button>Registrami</button>
</form>
    
</body>
</html>