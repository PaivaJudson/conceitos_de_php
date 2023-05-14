<?php
    
    class Car {
        public $color;
        public $model;

        public function _construct($color, $model){
            $this->color = $color;
            $this->model = $model;
        }

        public function info(){
            return "My car is a ".$this->color+" ".$this->model ."!";
        }

    }

    /*
    echo "<h1>Objectos</h1>";
    $myCar = new Car("Vermelho", "Volvo");

    echo $myCar->info();
    echo "<br>";
    */


    class Pessoa {

        public $nome = null;
        public $idade = 0;

        public function apresentar(){
            echo "Olá, meu nome é ". this->$nome ." e tenho: ". $this.idade ." de idade";
        }

    }

    $pUm = new Pessoa();
    $pUm->$nome = "Judson";
    $pUm->$idade = 10;

    $pUm->apresentar();

?> 