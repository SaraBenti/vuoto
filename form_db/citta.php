<?php

class Citta{
    private $nome="";

    function __construct($nome){//metodo che viene chiamato con il NEW
        $this->nome=$nome;
    }
    //così non si può più modificare se non metto un'altra funzione che modifica il nome

    function getNome(){
        return $this->nome;
    }
    function setRegione(){
        //connessione al db
        //sql where citta=$this->nome
        
    }

}
$c= new Citta("Rimini");
echo $c->getNome();

?>