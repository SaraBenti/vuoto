<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe</title>
</head>

<body>
    <?php
    //definizione di classe, non fa niente se qualcuno non la chiama; non è un elenco di istruzioni ma un elenco di proprietà e metodi
    //quindi eventualmente
    class Studente
    {
        public $nome = "";
        public $cognome = "";
        public $ruolo = "";
        public $dataNascita;
        private $password;
        private $voti=[];

        function __construct($nomeDaAssegnare, $cognomeDaAssegnare)
        {
            $this->nome = $nomeDaAssegnare;
            $this->cognome = $cognomeDaAssegnare;
            echo "istanziato un nuovo oggetto " . $this->nome . " " . $this->cognome . "<br>"; //solo come controllo ma dentro le funzioni echo non è granchè

        }
        function setDataNascita($dataNascita){
            $this->dataNascita=$dataNascita;
        }
        //metodo eta che restituisce l'età dello studente
        function eta(){
            //se mese-giorno corrente> mese-giorno di nascita allora ok
            $annoDataNascita= substr($this->dataNascita,0,4);
            $eta= date("Y")-$annoDataNascita;
            //altrimenti
            //$eta -=1;
            return $eta;
        }
        //metodo setVoti che inizializza l'array dei voti
        //metodo SetPassword che comprende la validazione della passw di classroom: lunghezza minima 10 caratteri
        //contenere almeno 1 numero e una maiuscola
    }



    $s1 = new Studente("Mario", "Rossi"); //istanzio l'oggetto s1 con new, cioè creo un elemento fisico da una classe generica; 
    //con new richiamo il costruttore e quindi mi ritorna la stampa
    $s1->nome = "Giorgio";
    
    //valore che ha attualmente s1 perchè l'echo era precedente al cambiamento di valore
    echo $s1->nome;
    echo "<br>";
    $s1-> setdataNascita('1980-10-21') ;
    echo $s1->eta();
    echo "<hr>";
    
    $s2 = new Studente("Bruno", "Bianchi");
    ?>
</body>

</html>