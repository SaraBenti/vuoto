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
            if(date("m")<substr($this->dataNascita,4,2)){
            //se mese-giorno corrente> mese-giornoDataNascita allora ok
            $annoDataNascita= substr($this->dataNascita,0,4);
            $eta= date("Y")-$annoDataNascita;
        }
            else{
            //altrimenti
            //$eta -=1;
            $annoDataNascita= substr($this->dataNascita,0,4);
            $eta=(date("Y")-$annoDataNascita)-1;
            }
            return $eta;
        }
        //metodo setVoti che inizializza l'array dei voti
        function setVoti($voti){ //$voti esiste solo qui dentro questa funzione
            if(! $voti){//se non è un array e quindi non ha valori
                return false;
            }
            //i voti devono essere compresi tra 1 e 100
            foreach($voti as $voto){
                if($voto>=1 AND $voto<=100){
                    //voto accettabile
                }else{
                    //voto non accettabile
                    return false;
                }
            }
            $this->voti=$voti;
        }
        function getVoti()
        //metodo SetPassword che comprende la validazione della passw di classroom: lunghezza minima 10 caratteri
        //contenere almeno 1 numero e una maiuscola
        function setPassword($p){
            $condizione_1_numero=false;
            $condizione_1_maiuscola=false;
            for ($i=0;$i<strlen($p)|| ($condizione_1_numero AND $condizione_1_maiuscola );$i++){
               $c= substr($p,$i,1); //verifico ogni carattere della stringa
               //controllo $c
               //compreso tra 0 e 9 se vero $condizione_1_numero=true
               //compreso tra A e Z
            }
            if ($condizione_1_numero && $condizione_1_maiuscola){
                //password ok
            }else {
                //password non corretta
            }
            if(strlen($password)<8){
                return false;
            }
            if(substr($password)){
                return false;
            }
            $this->password=$password;
        }
    }



    $s1 = new Studente("Mario", "Rossi"); //istanzio l'oggetto s1 con new, cioè creo un elemento fisico da una classe generica; 
    //con new richiamo il costruttore e quindi mi ritorna la stampa
    $s1->nome = "Giorgio";
    
    //valore che ha attualmente s1 perchè l'echo era precedente al cambiamento di valore
    echo $s1->nome;
    echo "<br>";
    $s1-> setdataNascita('1980-03-23') ;
    echo $s1->eta();
    echo "<hr>";
    $s1-> setVoti(5);
    var_dump($voti);
    
    $s2 = new Studente("Bruno", "Bianchi");
    $s2->setVoti([60,100,51,81]);
    ?>
</body>

</html>