<?php

require_once("Veiculo.php");

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){
        return "Acelerou ". $velocidade . " ";
    }

    public function frenar($velocidade){
        return "frenou ". $velocidade . " ";
    }

    public function mudarMarcha($marcha){
        return "mudar marcha ". $marcha . " ";
    }
}
