<?php
include_once("./conn_db.php");
include_once("./funzioni_utili.php");
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
  
1 - pagina 1 HTML (metodo e action che contiene il nome della pagina successiva nel form) <br>
2 - →submit nel bottone→informazioni alla pagina successiva disponibli nell'array della variabile super globale$_<br>
3 - possibilità di avere un link nella prima pagina<br>
4 - a href="due.php" url da richiamare(due.php?chiave-valore)<br>
5 - /...due.php?nome=Mario&C=Rossi(query string)►modalità statica<br>
6 - modalità dinamica<br>
7 - foreach(){<br>
8 - a href...due.php?$nome&$cognome<br>
9 - nella prima pagina ho la lista e ognuno ha un link<br>
10 - nella pagina dopo ho le informazioni in $_GET<br>
<!-- 
    Si chiede di realizzare una sezione di un sito web che permetta di gestire i dati
memorizzati nel database “ifts”.
In particolare, le operazioni richieste sono le seguenti
1. Creare un form con 1 campo di ricerca: nome.
2. Selezionare dalla tabella regioni i record che contengono nel nome regione o
nell’area geografica il valore inserito nel form precedente (non la corrispondenza
esatta ma anche solo una porzione).
3. Scrivere il nome della regione dei record selezionati.
4. Inserire un link sui record del punto 4 alla pagina ./regione.php passando l’id del
record.
5. Creare la pagina regione.php con l’elenco di tutti i campi della regione
6. Nella pagina regione.php inserire l’elenco delle città della regione.
Opzionale: nella pagina regione.php inserire un form per aggiungere una
nuova regione ed effettuare l’inserimento
-->

<form action=""></form>
    




</body>
</html>