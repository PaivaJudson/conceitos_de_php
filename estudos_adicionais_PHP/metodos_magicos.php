<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    
    public function __construct($logradouro, $numero, $cidade){
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }
}

$meuEndereco = new Endereco("Rua C4", 4, "Luanda");

var_dump ($meuEndereco);

