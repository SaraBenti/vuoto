<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe persona</title>
</head>
<body>
    <?php
class persona{
    private $nome;
    const SPECIE="essere umano";
        function __construct(){
        echo "istanziato nuovo oggetto";
        echo SPECIE;
        }
        function setNome($n){
            $this->nome=$n;
        }
        function getNome(){
            return $this->nome;
        }
        //ci sono delle caratteristiche statiche dell'intera classe
        //e quindi non dipendono dall'oggetto istanziato, sono generiche per la classe
        //dato statico=riferito staticamente alla classe e non ai singoli oggetti stanziati
        static public $numero;//valore statico che indica il numero delle persone e riguarda quindi
        //$p1, $p2....
        static function eta($data){
            //le static possono essere richiamate senza avere istanziato l'oggetto
            //si accede ai dati statici di una classe con -> oppure richiamo la classe 
            //e la funzione in questo modo persona::eta('2000-01-01')
            //con i due punti doppi richiamo valori statici(metodi o proprietà) e costanti
            // le costanti hanno visibilità globale e non cambiano valore
            //nomi tutti maiuscoli nelle costanti
        } 
}


$p1=new persona;
$p2=new persona;
$p1->setNome("pippo");
echo $p1->getNome();
$eta=persona::eta('2000-01-01');
echo persona::SPECIE;




?>
</body>
</html>