<?php
    
    class Car {
        public $color;
        public $model;

        public function info(){
            return "My car is a ".$this->color+" ".$this->model ."!";
        }

    };

 
    class Pessoa {

        public $nome = null;
        public $idade = 0;

        function apresentar(){
            return "Olá, meu nome é ". this->$nome ." e tenho: ". $this.idade ." de idade";
        }

    };


    
    $pUm = new Pessoa();
    $pUm->$nome = "Judson";
    $pUm->$idade = 10;

    echo "$pUm->apresentar()";
    
?> 
